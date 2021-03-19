<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;
use App\slide;
use App\catagory;

use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\redirect;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slides = slide ::where('status' , 'active')->get();
    $catagory = catagory::orderBy('id','asc')->get();
     //return response()->json($slides);
    return view('welcome',compact('slides','catagory'));
    }

    public function changepassword()
    {
        return view('auth.passwords.passwordchange');
    }

    public function passwordreset(Request $request)
    {
        $password=Auth::user()->password;
        $oldpass=$request->oldpass;
        if(Hash::check($oldpass, $password))
        {
           $user= User::find(auth::id());
           $user->password=Hash::make($request->password);
           $user->save();
           Auth::logout();
           return redirect()->route('login')->with('successmsg','Successfully password change','now you can log in');

        }
        else{
            return redirect()->route('changepassword')->with('error','old password does not match');
        }
    }

     public function first()
    {
        return view('welcome');
    }
}
