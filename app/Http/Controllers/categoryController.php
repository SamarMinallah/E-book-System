<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use  App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    // view
    function index(){
    return view("Category\addcategory");
}
// insert
function insert(Request $req){
$category=new category();
$category->name=$req->name;
$category->description=$req->description;
$category->save();
return redirect()->route("categoryfetch");

}
// fetch
function fetch(){
    $category=category::all();
    return view("Category.fetch",compact('category'));

}
// edir
function edit($id){
$category=category::findorfail($id);
return view("Category.edit",compact("category"));

}
// update
function update(Request $req,$id){
$category=category::find($id);
$category->name=$req->name;
$category->description=$req->description;
if($category->save()){
return redirect()->route("categoryfetch")->with("success","Data Updated Successfully!");
}
else{
    
return redirect()->route("categoryfetch");
}
}
// delete
function delete($id){
  $category=category::findorfail($id);
  $category=category::destroy($id);
  return redirect()->route("categoryfetch")->with("success","Data Deleted Successfully!");

}
}
