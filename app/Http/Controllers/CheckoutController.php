<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Book;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Mail\bookingmail;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
   function placeorder(Request $req){
    $req->validate([
       "user_name"=>"required",
        "order_id" => "required|integer|exists:orders,id",
        "book_id" => "required",
        "book_name" => "required",
        "format" => "required",
        "quantity" => "required",
        "unit_price" => "required",
        "total_amount" => "required",
        "payment_method" => "required",
         "card_number"    => "required_if:payment_method,Card",
        "card_name"      => "required_if:payment_method,Card",
        "expiry_date"    => "required_if:payment_method,Card",
        "cvv"            => "required_if:payment_method,Card"
]);

    if ($req->format === 'Instant PDF' && $req->payment_method !== 'Card') {
        return redirect()->back()
            ->withInput()
            ->withErrors(['payment_method' => 'Instant PDF purchases require Card payment.']);
    }

$book=Book::find($req->book_id);
$pdf= $book->bookpdf;

$massage="Hello Dear ! Welcome to E-Book Ordering";
$subject="Booking Details";
Mail::to(Auth::user()->email)->send(new bookingmail(
    $massage,               // 1. $massage
    $subject,               // 2. $subject
    $req->format,           // 3. $bookformate
    $req->total_amount,     // 4. $bookamount
    $req->book_name,        // 5. $bookname
    $pdf,               // 6. $pdf
    $req->payment_method  
));



$checkout=new Checkout();
$checkout->user_id = auth()->id();
$checkout->user_name=$req->user_name;
$checkout->book_id=$req->book_id;
$checkout->book_name=$req->book_name;
$checkout->format=$req->format;
$checkout->quantity=$req->quantity;
$checkout->unit_price=$req->unit_price;
$checkout->total_amount=$req->total_amount;
$checkout->payment_method=$req->payment_method;
$checkout->card_number=$req->card_number;
$checkout->card_name=$req->card_name;
$checkout->expiry_date=$req->expiry_date;
$checkout->cvv=$req->cvv;
$checkout->save();

Order::where('user_id', auth()->id())
    ->where('id', $req->order_id)
    ->delete();

return redirect()->back()->with('success', 'Your Order has Confirmed');
}




 function fetch(){
    $checkout=Checkout::all();
    return view("Order.fetchorder",compact('checkout'));
}
function deleteorder($id){
  $checkout=checkout::findorfail($id);
  $checkout=checkout::destroy($id);
  return redirect()->route("fetchorder")->with("success","Data Deleted Successfully!");

}







   }
  

