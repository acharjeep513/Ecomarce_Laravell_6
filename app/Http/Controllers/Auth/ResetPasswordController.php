<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\admin;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/admin' ;


    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function reset()
    {
     return view('auth.passwords.reset');
     }


    public function showResetForm(Request $request, $token = null)

    {
        
    if(!is_null($token))
    {
         $user=User::where('remember_token',$token)->first();
         $user->status=1;
         $user->remember_token= NULL;
         $user->save();
         return redirect('/login'); 
    }
        return view('auth.passwords.reset' ,compact('a'))->with(
            ['email' => $request->email]
        );
    }
     public function broker()
    {
        return Password::broker('admins');
    }
}
