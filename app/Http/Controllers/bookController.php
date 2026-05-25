<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class bookController extends Controller
{
function index(){
    $category=category::all();
    return view("Books\addbook",compact("category"));
}
// insert
function insert(Request $req){
    $req->validate([
        "title" => "required",
        "authorname" => "required",
        "category" => "required",
        "price" => "required",
        "stock" => "required",
        "description" => "required",
        "bookcover" => "required | image |mimes: jpg,jpeg,png",
        "bookpdf" => "required |file|mimes:pdf|max:10240"
]);
$bookcover=$req->file("bookcover")->store("bookimages","public");
$coverpath=basename($bookcover);
$bookpdf=$req->file("bookpdf")->store("bookimages","public");
$pdfpath=basename($bookpdf);
$book=new book();
$book->bookname = $req->title;
$book->authorname = $req->authorname;
$book->price = $req->price;
$book->stock = $req->stock;
$book->description = $req->description;
$book->category_id = $req->category;
$book->bookcover = $coverpath;
$book->bookpdf = $pdfpath;
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
function update(Request $req ,$id){
$updatebook=book::findorfail($id);
$updatebook->bookname = $req->title;
$updatebook->authorname = $req->authorname;
$updatebook->price = $req->price;
$updatebook->stock = $req->stock;
$updatebook->description = $req->description;
$updatebook->category_id = $req->category;

// Handle bookcover upload
if($req->hasFile('bookcover')){
    $coveroldpath=storage_path('app/public/bookimages/'.$updatebook->bookcover);
    if(File::exists($coveroldpath)){
        File::delete($coveroldpath);
    }
    $newbookcover=$req->file('bookcover')->store('bookimages',"public");
    $updatebook->bookcover=basename($newbookcover);
}

// Handle bookpdf upload
if($req->hasFile('bookpdf')){
    $pdfoldpath=storage_path('app/public/bookimages/'.$updatebook->bookpdf);
    if(File::exists($pdfoldpath)){
        File::delete($pdfoldpath);
    }
    $newbookpdf=$req->file('bookpdf')->store('bookimages',"public");
    $updatebook->bookpdf=basename($newbookpdf);
}

$updatebook->save();
return redirect()->route("bookfetch")->with("success","Book Updated Successfully");
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
}