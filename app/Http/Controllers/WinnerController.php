<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participate;
use App\Models\Competition;
use App\Models\Winner;

class WinnerController extends Controller
{
    function winnerselect(){
        $participants=Participate::all();
        $Competition=Competition::all();
        return view('Winners.selectwinner',compact('participants','Competition'));
    }
function winnerinsert(Request $req){
     $req->validate([
        'score' => 'required|numeric',
        'prize' => 'required|string', 
    ]);
    $winner = new Winner();
    $winner->user_id = $req->user_id; 
    $winner->score = $req->score;
    $winner->prize = $req->prize;
    $winner->save();
    
    return redirect()->back()->with("success", "Winner Has Been Selected 🎉");
}
}