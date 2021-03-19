<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;

class slidersController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
  public function index()
  {
     $slides = slide::where('status','active')->get();
     return view('Slider.slideRepresentation',compact('slides'));
  }

public function indexs()
{
  return view('admin.manageSlider.sliderIndex');

}

public function adminAddSlider()
{
  return view('admin.manageSlider.addSlider');
}


  public function adminShowSlider()
  {
  	 $slides = slide::orderBy('id','asc')->get();
  	 return view('admin.manageSlider.showSlider',compact('slides'));
  }
  public function slidesView($id)
  {
           $slides=slide::findorfail($id);
     
       
        return view('admin.manageSlider.editSlider',compact('slides'));   
            //return response()->json($student);
  }

  public function slidesEdit(Request $request,$id){

		$slides=new slide;
		$slides = slides::find($id); 
		$slides->title=$request->title;
		$slides->image=$request->image;
		$slides->button_text=$request->button_text;
		$slides->button_link=$request->button_link;
        $slides->save();
        // return view('Slider.addSlider');
         $slides = slide::orderBy('id','asc')->get();
     return view('admin.manageSlider.showSlider',compact('slides'));

  }


  public function sliderDelete($id)
  {


      $slides=new slide;
      $slides=slides::findorfail($id);
      $slides->delete();
  
     $slides = slide::orderBy('id','asc')->get();
     return view('admin.manageSlider.showSlider',compact('slides'));

  }

  public function slidesAdd()
  {

  	return view('slider.newSlidesAdd');
  }


  public function slidesAddToDatabase(Request $request)
  {
        $slides=new slide;
		$slides->title=$request->title;
		$slides->image=$request->image;
		$slides->button_text=$request->button_text;
		$slides->button_link=$request->button_link;
        $slides->save();

$slides = slide::orderBy('id','asc')->get();
     return view('admin.manageSlider.showSlider',compact('slides'));
  }
}
