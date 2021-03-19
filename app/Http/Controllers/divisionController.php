<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\ProductImage;
use Image;
use App\division;

class divisionController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }
  public function index(){
    return view('admin.manageDivision.divisionIndex');
  }
   public function  addDivision()
   {
      return view('admin.manageDivision.addDivision');
   }

   public function  addall(Request $request)
   {
      
		$division=new division;
		$division->division=$request->division;
		$division->prority=$request->priority;
        $division->save();

   }

   public function  divisionShow()
   {

       $division = division::all();
       //return response()->json($division);
     return view('admin.manageDivision.showDivision',compact('division'));
   }
   public function  divisionUpdate($id)
   {

   	$division=division::findorfail($id);
     return view('admin.manageDivision.editProduct',compact('division'));   
            //return response()->json($student);
   }

    public function divisionEdited(Request $request,$id)
    {
    
    $division=new division;
    $division= division::find($id); 
    $division->division=$request->division;
    $division->prority=$request->prority;
    $division->save();
             
            
    $division = division::orderBy('id','desc')->get();
    return view('admin.manageDivision.divisionIndex');
        
    }

    public function divisionDelete($id){
    $division = new division;
    $division = division::findorfail($id);
    $division->delete();
        
    $division = division::orderBy('id','desc')->get();
    return view('admin.manageDivision.divisionIndex');
        
    }
}

