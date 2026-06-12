<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class bookController extends Controller
{
function index(Request $request){
    $category = Category::all();
    return view('Books.addbook', compact('category'));
}
// insert
function insert(Request $req){
    $req->validate([
        "title" => "required",
        "authorname" => "required",
        "category" => "required",
        "pricepdf" => "required",
        "pricehardcopy" => "required",
        "pricecd" => "required",
        "publishername" => "required",
        "publishdate" => "required",
        "Edition" => "required",
        "language" => "required",
        "ISBN" => "required",
        "stock" => "required",
        "pages" => "required",
        "description" => "required",
        "bookcover" => "required | image |mimes: jpg,jpeg,png",
        "backcover" => "required | image |mimes: jpg,jpeg,png",
        "bookpdf" => "required |file|mimes:pdf"
]);
$bookcover=$req->file("bookcover")->store("bookimages","public");
$coverpath=basename($bookcover);
$backcover=$req->file("backcover")->store("bookimages","public");
$backcoverpath=basename($backcover);
$bookpdf=$req->file("bookpdf")->store("bookimages","public");
$pdfpath=basename($bookpdf);
$book=new book();
$book->bookname = $req->title;
$book->authorname = $req->authorname;
$book->pricepdf = $req->pricepdf;
$book->pricehardcopy = $req->pricehardcopy;
$book->pricecd = $req->pricecd;
$book->publishername = $req->publishername;
$book->publishdate = $req->publishdate;
$book->language = $req->language;
$book->ISBN = $req->ISBN;
$book->Edition = $req->Edition;
$book->stock = $req->stock;
$book->pages = $req->pages;
$book->description = $req->description;
$book->category_id = $req->category;
$book->bookcover = $coverpath;
$book->bookpdf = $pdfpath;
$book->backcover = $backcoverpath;
$book->save();
if($book){
return redirect()->route("bookfetch")->with("success","Book Uploaded Successfully");
}

}
// fetch
function fetch(){
    $book=Book::with('category')->get();
    return view("Books.fetch",compact('book'));
}
// edit
function edit($id){
    $category=category::all();
$book=Book::findorfail($id);
return view("Books.edit",compact('book','category'));
}
// update
public function update(Request $req, $id)
{
    $req->validate([
        "title" => "required",
        "authorname" => "required",
        "category" => "required",
        "pricepdf" => "required",
        "pricehardcopy" => "required",
        "pricecd" => "required",
        "publishername" => "required",
        "publishdate" => "required",
        "Edition" => "required",
        "language" => "required",
        "ISBN" => "required",
        "stock" => "required",
        "pages" => "required",
        "description" => "required",

        "bookcover" => "nullable|image|mimes:jpg,jpeg,png",
        "backcover" => "nullable|image|mimes:jpg,jpeg,png",
        "bookpdf" => "nullable|file|mimes:pdf"
    ]);

    $updatebook = book::findOrFail($id);
    $updatebook->bookname = $req->title;
    $updatebook->authorname = $req->authorname;
    $updatebook->pricepdf = $req->pricepdf;
    $updatebook->pricehardcopy = $req->pricehardcopy;
    $updatebook->pricecd = $req->pricecd;
    $updatebook->publishername = $req->publishername;
    $updatebook->publishdate = $req->publishdate;
    $updatebook->language = $req->language;
    $updatebook->ISBN = $req->ISBN;
    $updatebook->Edition = $req->Edition;
    $updatebook->stock = $req->stock;
    $updatebook->pages = $req->pages;
    $updatebook->description = $req->description;
    $updatebook->category_id = $req->category;
    // handle bokcover
    if ($req->hasFile('bookcover')) {
        $coverOldPath = storage_path('app/public/bookimages/' . $updatebook->bookcover);
        if (File::exists($coverOldPath)) {
            File::delete($coverOldPath);
        }
        $newBookCover = $req->file('bookcover')->store('bookimages', 'public');
        $updatebook->bookcover = basename($newBookCover);
    }
// handle back cover
    if ($req->hasFile('backcover')) {
        $backCoverOldPath = storage_path('app/public/bookimages/' . $updatebook->backcover);
        if (File::exists($backCoverOldPath)) {
            File::delete($backCoverOldPath);
        }
      $newBackCover = $req->file('backcover')->store('bookimages', 'public');
        $updatebook->backcover = basename($newBackCover);
    }
// handle pdf upload
    if ($req->hasFile('bookpdf')) {
        $pdfOldPath = storage_path('app/public/bookpdfs/' . $updatebook->bookpdf);
        if (File::exists($pdfOldPath)) {
            File::delete($pdfOldPath);
        }
        $newBookPdf = $req->file('bookpdf')->store('bookpdfs', 'public');
        $updatebook->bookpdf = basename($newBookPdf);
    }

    $updatebook->save();

    return redirect()->route("bookfetch") ->with("success", "Book Updated Successfully");
}
// delete
function delete($id){
    if(book::destroy($id)){
        return redirect()->route("bookfetch")->with("error","book deleted");
    }
else{
    return redirect()->route("bookfetch");

}

}
// for shop page cards of books
function shoppage(){
    $allbooks=book::all();
    $categories = Category::all();
    return view("User.shop",compact('allbooks','categories'));
}
// for book detail
function bookdetail($id){
    $bookdetail=book::findorfail($id);
    return view("User.bookdetail",compact('bookdetail'));
}
// for search of books
public function shopsearch(Request $request)
{
    $query = Book::query();

    if($request->filled('search'))
    {
        $query->where('bookname', 'like', '%' . $request->search . '%')
              ->orWhere('authorname', 'like', '%' . $request->search . '%');
    }

    if($request->filled('category'))
    {
        $query->where('category_id', $request->category);
    }

    $allbooks = $query->get();

    $categories = Category::all();

    return view('User.shop', compact(
        'allbooks',
        'categories'
    ));
}

}