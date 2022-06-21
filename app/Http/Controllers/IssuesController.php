<?php

namespace App\Http\Controllers;
use App\Issue;
use Auth;
use App\Mail\IssuesRequestSubmitted;
use App\User;
use App\Imports\IssuesImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class IssuesController extends Controller

{    public function list(){
   // $data['issues'] = Issue::all();
    $data['users'] = User::all();
    return view('Issues.list',$data);
}
    public function __construct()
    {
        $this->middleware('auth')->except(['test']);
    }
    public function store(Request $request){
        //return $request;
        
            $issue = new Issue();
         $issue->name=$request->name;
         $issue->email=$request->email;
         $issue->phone=$request->phone;
         $issue->building_number=$request->building_number;
         $issue->apartment_number=$request->apartment_number;
         $issue->user_id= Auth::user()->id ;
         $issue->attachment=null;
         $issue->msg=$request->msg;
         $issue->save();
        // \Mail::to($issue->email)->send(new IssuesRequestSubmitted($issue));

     

     return "Record is created succefuly";

    





    }
    public function test(){
        return "this is a test function";
    }
    public function importFromExcel(Request $request ){
        //validate 
        Excel::import(new IssuesImport,$request->excelFile);
        return "Data imported successfully ";
    }
}
