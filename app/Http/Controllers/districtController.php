<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\district;

class districtController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    } 
   public function  addDistrict()
   {
      return view('admin.manageDistrict.addDistrict');
   }
   
    public function  index()
   {
      return view('admin.manageDistrict.districtIndex');
   }


   public function  addall(Request $request)
   {
      
		$district=new district;
		$district->district=$request->district;
		$district->division=$request->division;
        $district->save();
        return view('admin.manageDistrict.districtIndex');

   }

   public function  districtShow()
   {

     $district = district::all();
     //return response()->json($district);
     return view('admin.manageDistrict.showDistrict',compact('district'));
   }
   public function  districtUpdate($id)
   {

   	$district=district::findorfail($id);
     return view('admin.manageDistrict.editDistrict',compact('district'));   
            //return response()->json($student);
   }

    public function districtEdited(Request $request,$id)
    {
    
    $district=new district;
    $district= district::find($id); 
    $district->district=$request->district;
    $district->district=$request->district;
    $district->save();
             
            
    $district = district::orderBy('id','desc')->get();
    return view('admin.manageDistrict.showDistrict',compact('district'));
        
    }

    public function districtDelete($id){
    $district = new district;
    $district = district::findorfail($id);
    $district->delete();
        
    $district = district::orderBy('id','desc')->get();
    return view('admin.manageDistrict.showDistrict',compact('district'));
        
    }
}
