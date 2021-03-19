<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\ProductImage;
use App\catagory;
use Image;
use App\review;

class ProductController extends Controller
{
 
     public function productShow(){
        
       $product = product::all();
        return view('include.productTable',compact('product'));
    }
   public function ProductView($id){
    	$product=product::findorfail($id);
     return view('admin.adminUpdateProduct',compact('product'));   
            //return response()->json($student);
    }
    public function ProductUpdate(Request $request,$id){
    


		$product=new product;
		$product = product::find($id); 
		$product->title=$request->title;
		$product->description=$request->description;
		$product->price=$request->price;
		$product->quantity=$request->quantity;
		$product->slug=$request->slug;
		$product->catagory_id=1;
		$product->brand_id=1;
		$product->admin_id=1;
        $product->save();


        // if($request->hasFile('Image'))
        // {
        //    $image=  $request->file('Image') ;
        //    $img=time().'.'.$image->getClientOriginalExtension();
        //    $location=public_path('front-end/Image' .$img);
        //    Image::make($image)->save($location);
        //    $product_image=new ProductImage;
        //    $product_image->product_id=$product->id;
        //    $product_image->image=$img;
        //    $product_image->save();
        //      return view('home');
        // }


         
         if(count($request->Image)>0)
         {
           foreach ($request->Image as $image) {
           
          // $image=  $request->file('Image[]') ;
           $img=time().'.'.$image->getClientOriginalExtension();
           $location=public_path('front-end/Image' .$img);
           Image::make($image)->save($location);
           $product_image=new ProductImage;
           $product_image->product_id=$product->id;
           $product_image->image=$img;
           $product_image->save();
             
        
           }
         }
     // return response()->json($request);






    }
  public function productDelete($id){
    //return response()->json($student);
      $product=new product;
      $product=product::findorfail($id);
      $product->delete();
     //  $product_image=new ProductImage;
     //  $product_image->product_id=$product->id;
     //  // $catagory=new catagory;
     // $product_image=ProductImage::findorfail($product_image->product_id);
     // $product_image->delete();


      return view('home');
     // return response()->json($product);

    }


  public function index()
  {

      $product = product::orderBy('id','desc')->get();
      return view('product.productAll',compact('product'));
      
  }
  public function showSingleProduct($id)
  {

    $product=product::where('id',$id)->first();
    $image=ProductImage::where('product_id',$id)->get();
    $a=product::where('slug', $product->slug)->get();
    $review=review::where('product_id', $id)->get();
    $b=review::where('product_id', $id)->get();
    

       // return response()->json($image);

    //$a=product::orderBy('id','desc')->get();
     //return response()->json($product);
    return view('product.productSingle',compact('product','a','review','b','image'));
  }
     
}
