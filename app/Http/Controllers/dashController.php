<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class dashController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboar()
    {
       $user=Auth::user();
      return view('Dashboard.dashBoard',compact('user'));

    }
}
