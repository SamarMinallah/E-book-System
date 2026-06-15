<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CompetitionController;
use App\Models\Competition;
use App\Models\Winner;

use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $competitions = Competition::all();

   return view('Competitions.insert',
        compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Competitions.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
      "title"=>"required",
      "type"=>"required",
      "start_date"=>"required",
      "end_date"=>"required",
      "rules"=>"required",
      "prize1"=>"required",
      "prize2"=>"required",
      "prize3"=>"required",
       "description"=>"required"
        ]);

        $competitions=new Competition();
        $competitions->title=$request->title;
        $competitions->type=$request->type;
        $competitions->start_date=$request->start_date;
        $competitions->end_date=$request->end_date;
        $competitions->rules=$request->rules;
        $competitions->status = 'Open';
        $competitions->prize1=$request->prize1;
        $competitions->prize2=$request->prize2;
        $competitions->prize3=$request->prize3;
        $competitions->description=$request->description;
   
$competitions->save();
if($competitions){
return redirect()->route('allcompetition');
}
else{
    return back();
}

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $competitions=competition::all();
        return view("Competitions.fetch",compact('competitions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $result=competition::find($id);
    return view("Competitions.edit",compact('result'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        
    $competitions=competition::find($id);
    $competitions->title=$req->title;
    $competitions->type=$req->comp_type;
    $competitions->start_date=$req->start_date;
    $competitions->end_date=$req->end_date;
    $competitions->rules=$req->rules;
    $competitions->status= 'confirmed';
    $competitions->prize_details=$req->entry_fee;
    $competitions->description=$req->description;
    $competitions->save();

    if($competitions){
return redirect()->route('allcompetition');
}
else{
   return redirect()->route('allcompetition');
}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete( $id)
    {
        if(competition::destroy($id)){
  return redirect()->route('allcompetition')->with("success","competitions is deleted");  
}
else{
     return redirect()->route('allcompetition'); 
}
    }

// To Competition view page

function Competitionpage(){
    $allcomp = Competition::all();
    $winners = Winner::with('user')->latest()->take(3)->get();
    return view("User.competition", compact('allcomp','winners'));
}











}