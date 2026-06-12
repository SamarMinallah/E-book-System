<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    function insert(Request $req){
  $req->validate([
        "first_name" => "required",
        "last_name" => "required",
        "email" => "required",
        "phone" => "required",
        "subject" => "required",
        "message" => "required",
]);
$contact=new contact();
$contact->first_name=$req->first_name;
$contact->last_name=$req->last_name;
$contact->email=$req->email;
$contact->phone=$req->phone;
$contact->subject=$req->subject;
$contact->message=$req->message;
$contact->save();
return redirect()->back()->with("success","Your Message had been Sent, We'll reach you soon");
}

function fetch(){
    $contact=contact::all();
    return view("Contacts.fetch",compact('contact'));
}
function deletecontactuser($id){
  $contact=contact::findorfail($id);
  $contact=contact::destroy($id);
  return redirect()->route("fetchcontact")->with("success","Data Deleted Successfully!");

}
    }

