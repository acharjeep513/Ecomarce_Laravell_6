<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use  App\User;
use  App\cart;
use App\product;
use Auth;
use  App\review;

class cartController extends Controller
{
   public function store(Request $request)
   {
    
//         $request->validate([
//         'product_id' => 'required|max:255',
        
//     ]
//      [
//         'product_id.required' =>'please give a product'
//      ]

// );

    $cart=cart::orWhere('user_id',Auth::id())
               ->where('product_id', $request->product_id)
                 ->first();
                  //return response()->json($cart);
                 if(!is_null($cart))
                 {
                  $cart->increment('product_quantity');
                 }
                 else{
                 $cart= new cart();
                  if(Auth::check())
    {
      $cart->user_id=Auth::id();
    }
    else{
        $cart->ip_address=request()->ip();
    }

       
    $cart->product_id=$request->product_id;
        $cart->save();
}
   }
   public function showCart()
   {
    if(Auth::check()){

      $carts=cart::orWhere('user_id',Auth::id())
                 ->get();
       }
       else{
        $carts=cart::Where('ip_address',request()->ip())->get();
       }
  
   $review = review::orderBy('id','asc')->get();
   return view('cart.cart',compact('carts','review'));
       
   }

   public function update(Request $request , $id)
   {
     $cart=cart::find($id);
     if(!is_null($cart))
     {
      $cart->product_quantity =$request->product_quantity;
      $cart->save();
     }
     else
     {
      return back();
     }

   }

   public function delete($id)
   {
     $cart=cart::find($id);
     if(!is_null($cart))
     {

      $cart->delete();
      return back();
     }
     else
     {
      return back();
     }

   }
   


 

   

}
