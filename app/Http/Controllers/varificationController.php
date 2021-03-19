<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Notifications\verifyRegistration;



class varificationController extends Controller
{
  
   public function verify($token)
   {
   	$user= new User;
   	if(!is_null($user))
   	{
         $user=User::where('remember_token',$token)->first();
         $user->status=1;
         $user->remember_token= NULL;
         $user->save();
         return redirect('/login'); 
    }
   }

}
