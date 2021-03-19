<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\redirect;
use App\order;
use App\cart;
use PDF;

class ordersController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {  
         $order = order::all();  
        return view('admin.manageOrder.orderIndex',compact('order'));
    }

  public function showOrder()
    {  
         $order = order::all();  
        return view('admin.manageOrder.showOrder',compact('order'));
    }



   public function orderView($id)

    {
        $order=order::findorfail($id);
     
       
        return view('admin.manageOrder.editOrder',compact('order'));   
            //return response()->json($student);
    }
    public function orderShow(Request $request,$id){


  $order=new order;
    $order= order::find($id); 
    $order->id=$request->id;
    $order->user_id=$request->user_id;
    $order->ip_address=$request->ip_address;
    $order->name=$request->name;
    $order->phone=$request->phone;
    $order->shiping_address=$request->shiping_address;
    $order->email=$request->email;
    $order->massage=$request->massage;
    $order->is_paid=$request->is_paid;
    $order->is_completed=$request->is_completed;
    $order->is_seen_by_admin=$request->is_seen_by_admin;
    $order->save();



      $order = order::all(); 
   	    return view('admin.manageOrder.showOrder',compact('order'));
    }

    public function orderDelete($id){
    //return response()->json($student);
      $order=new order;
      $order=order::findorfail($id);
      $order->delete();
      return view('home');
      

    }

    public function pdf($id)
    {
      $order=new order;
   

    $order=order::where('id', $id)
                 ->get();
      $pdf = PDF::loadView('admin.manageOrder.pdf', compact('order'));
      return $pdf->download('invoice.pdf');
    }
}
