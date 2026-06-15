<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participate;

class ParticipateController extends Controller
{
    function submitentry(Request $req){
$req->validate([
        "fullname" => "required",
        "useremail" => "required",
        "Comp_name" => "required",
        "Work" => "required |file|mimes:pdf",
]);
$workpdf=$req->file("Work")->store("bookimages","public");
$workpath=basename($workpdf);
$participate=new Participate();
$participate->user_id = auth()->id();
$participate->fullname=$req->fullname;
$participate->useremail=$req->useremail;
$participate->Comp_name=$req->Comp_name;
$participate->Work=$workpath;
$participate->save();
return redirect()->back()->with("success","Your Entry Had Been Submitted, We'll reach you soon");
}
function fetch(){
    $Participate=Participate::all();
    return view("Participate.fetch",compact('Participate'));
}

function deleteparticipate($id){
  $Participate=Participate::findorfail($id);
  $Participate=Participate::destroy($id);
  return redirect()->route("fetchparticipate")->with("success","Data Deleted Successfully!");

}














    }

