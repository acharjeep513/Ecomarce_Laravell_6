<?php

namespace App\Http\Controllers\Auth\Admin;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Notifications\varifyRegistration;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\admin;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
     public function showLoginForm(){
       
        return view('admin.login');
     
    }
     public function login(Request $request)
    {

    // dd('test');
         $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

         $admin= admin::where('email', $request->email)->first();
        
            //login
            if(Auth::guard('admin')->attempt(['email'=>$request->email , 'password'=>$request->password], $request->remember)){
                return redirect('/admin');
            
      
    }
    else
        {
           return redirect('/adminLog'); 
        }
}
    }