<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catagory;
use Image;


class CatagoryController extends Controller
{
      public function productDelete($id){
    //return response()->json($student);
      $product=new product;
      $product=product::findorfail($id);
      $product->delete();
      return view('home');
      return response()->json($product);

    }

    public function index()
    {
         $catagory = catagory::orderBy('id','desc')->get();
         return view('catagory.catagoryTable',compact('catagory'));

    }

    public function Catagoryadd()
    {

      $main_catagory=catagory::orderBy('name','desc')->where('parent_id',NULL)->get();
      return view('catagory.catagoryProduct',compact('main_catagory'));      

    }
    public function CatagoryAddDatabase(Request $request)
    {
  //return response()->json($request);
      
  
        $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        //'image' => 'required',

    ]);

    $catagory=new catagory;
    $catagory->name=$request->name;
    $catagory->description=$request->description;
    $catagory->parent_id=$request->parent_id;   
          $image=  $request->file('image') ;
           $img=time().'.'.$image->getClientOriginalExtension();
           $location=public_path('front-end/catagory' .$img);
           Image::make($image)->save($location);
           $catagory->image=$img;

           $catagory->save();      
    }




    public function catagoryview($id)
    {
        $cat=catagory::findorfail($id);
        return view('catagory.catagoryview',compact('cat'));   
            //return response()->json($student);
    }


    public function catagoryUpdate(Request $request,$id)
    {
    
    $catagory=new catagory;
    $catagory= catagory::find($id); 
    $catagory->name=$request->name;
    $catagory->description=$request->description;
     
           $image=  $request->file('image') ;
           $img=time().'.'.$image->getClientOriginalExtension();
           $location=public_path( $img);
           Image::make($image)->save($location);
           $catagory->save();
             
            $catagory = catagory::orderBy('id','desc')->get();
            return view('catagory.catagoryTable',compact('catagory'));
        
    }

    public function catagoryDelete($id){
        $catagory = new catagory;
        $catagory = catagory::findorfail($id);
        $catagory->delete();
        
        $catagory = catagory::orderBy('id','desc')->get();
        return view('catagory.catagoryTable',compact('catagory'));
        
    }


    public function allCatagory()
    {
        $catagory = catagory::orderBy('id','desc')->get();
       // return response()->json($catagory);
    
        return view('catagory.showAllCatagory',compact('catagory'));


    }

 public function showAllProductByCatagory($id)
    {

       $product=product::where('catagory_id', $id)
                 ->get();
       // $catagory = catagory::orderBy('id','desc')->get();
       // return response()->json($product);
    
        return view('product.showAllProductByCatagory',compact('product'));


    }

}

