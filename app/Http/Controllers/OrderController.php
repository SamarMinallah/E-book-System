<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\book;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    function orderinsert(Request $req){
$addtocart=new order();
$addtocart->user_id = auth()->id();
$addtocart->book_id=$req->book_id;
$addtocart->book_quantity=$req->quantity;
$addtocart->save();
order::where('user_id', $req->user_id)->where('book_id', $req->book_id)->delete();
return redirect()->back()->with("success","Item Added to Cart!");
}


function fetchcart()
{
    $cartitem = Order::with('book')
        ->where('user_id', Auth::id())
        ->get();

    $cartCount = Order::where('user_id', Auth::id())->count();

    return view('Cart.fetchcart', compact('cartitem', 'cartCount'));
}
function deletecart($id)
{
    Order::destroy($id);
    return redirect()->route("cartpage")->with("success", "Item removed from Cart");
}





    }
