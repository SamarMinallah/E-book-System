<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\book;
use App\Models\checkout;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function index(){
        return view("\Admin\index");
    }
    function dashboard(){
        $bookcount=book::count();
        $ordercount=checkout::count();
        $book=Book::latest()->get();
        return view("Admin.index",compact('bookcount','ordercount','book'));
    }
}
