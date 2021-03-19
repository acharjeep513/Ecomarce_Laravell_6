<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class profileController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function profile()
    {
    	$user=Auth::user();
    	return view('Dashboard.profileUpdate',compact('user'));
    }
    public function  profileEdited(Request $request)
   {
      
	    $user=Auth::user();
		$user->first_name=$request->first_name;
		$user->last_name=$request->last_name;
		$user->email=$request->email;
		$user->phone=$request->phone;
		$user->street_address=$request->street_address;
        $user->save();

   }
}
