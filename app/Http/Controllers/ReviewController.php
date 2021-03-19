<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\user;
use App\review;
use App\ProductImage;
use App\cart;
use App\catagory;
use App\slide;
use Auth;
use Image;

class ReviewController extends Controller
{
    public function review($id)
    {
    

    if(Auth::check()){

      $cart=cart::Where('user_id',Auth::id())
                 ->Where('product_id',$id)
                 ->first();
      //return response()->json($cart->id);
       }

       else{
        $cart=cart::Where('ip_address',request()->ip())
        ->Where('product_id',$id)
        ->first();
      //return response()->json($carts);
       }



    	$a=$id;
    	return view('Review.addReview',compact('a','cart'));
        
    }

    public function addReview(Request $request,$id){
    $cart= new cart();
    $cart= cart::find($id); 
    $cart->id=$request->id;
    $cart->product_id=$request->product_id;
    $cart->user_id=$request->user_id;
    $cart->order_id=1;
    //return response()->json($student);
    $cart->product_quantity=$request->product_quantity;
        $cart->save();

		$product=new review;
		$product->name=$request->name;
		$product->review=$request->description;
		$product->product_id=$request->aa;

    if(Auth::check()){
      $product->user_id=Auth::id();
      $product->ip_address='NULL';
     
       }

       else{
       
      $product->user_id= 0;
      $product->ip_address=request()->ip();
       }




		
		//return response()->json($student);
		$product->rating=$request->Rating;
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

          $catagory = catagory::orderBy('id','asc')->get(); 
          $slides = slide ::where('status' , 'active')->get();
           return view('welcome',compact('catagory','slides'));

         }

    }
}
