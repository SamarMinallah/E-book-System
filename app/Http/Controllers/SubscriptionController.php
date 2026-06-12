<?php

namespace App\Http\Controllers;
use App\Mail\subscriptionmail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
class SubscriptionController extends Controller
{
function readerinsert(Request $req){
    $req->validate([
        "fullname" => "required",
        "email" => "required",
        "plan_name" => "required",
        "plan_duration" => "required",
        "plan_amount" => "required",
        "card_name" => "required",
        "card_number" => "required",
        "expiry" => "required",
        "cvv" => "required",
]);


$plan=subscription::find(auth()->id());
$plan= $req->plan_name;

$massage="Hello Dear ! You had successfully subscribed to our plan";
$subject="Here are some details of your plan";
Mail::to(Auth::user()->email)->
send(new subscriptionmail($massage,$subject,$req->plan_name,$req->plan_duration,$req->plan_amount));


$readerplan=new subscription();
$readerplan->user_id = auth()->id();
$readerplan->user_name=$req->fullname;
$readerplan->user_email=$req->email;
$readerplan->plan_name=$req->plan_name;
$readerplan->plan_duration=$req->plan_duration;
$readerplan->plan_amount=$req->plan_amount;
$readerplan->Name_On_Card=$req->card_name;
$readerplan->card_number=$req->card_number;
$readerplan->expiry_date=$req->expiry;
$readerplan->CVV=$req->cvv;
$readerplan->save();$readerplan->save();

return redirect()->back()->with('success', 'Subscription created successfully');
}
function fetch(){
    $plan=subscription::all();
    return view("Plans.fetch",compact('plan'));
}
function deleteplanuser($id){
  $subscription=subscription::findorfail($id);
  $subscription=subscription::destroy($id);
  return redirect()->route("fetchplandata")->with("success","Data Deleted Successfully!");

}












}
