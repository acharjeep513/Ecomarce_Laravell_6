<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Notifications\verifyRegistration;
use App\User;
use Illuminate\Http\Request;
use Auth;

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


      public function login(Request $request)
    {

         $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
                         ]);
        $user= User::where('email', $request->email)->first();
        
            //login
        if($user->status == 1){
            if(Auth::guard('web')->attempt(['email'=>$request->email , 'password'=>$request->password], $request->remember)){
                return redirect('/home');

            }
        }
            else
            {
                if(!is_null($user)) 
                {
                     $user->notify(new verifyRegistration($user));
                      return redirect('/');
                }
                else
                  {
                       return redirect('/');
                  }     
            }
    }

}
