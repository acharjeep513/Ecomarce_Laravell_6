<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\district;
use App\division;
use App\Notifications\verifyRegistration;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

       /**
     * Display the registration form
     *
     * @return void view
     */
    public function showRegistrationForm()
    {
        $district = district::orderBy('id','desc')->get();
        $division = division::orderBy('id','desc')->get();
        return view('auth.register', compact('district' , 'division'));
    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' =>  ['required','string',' max:255'],
            'last_name' =>  ['required','string', 'max:255'],
            'User_name' => ['required','string', 'max:255'],
            'phone' =>  ['max:15'],
            'email' => ['required',' email','max:100'],
            'Street_address' => ['required ','string ', 'max:255'],
            'password' => ['required ','string',' min:8 ',' confirmed'],
            'division_ID' => ['required ',' numeric'],
            'district_ID' => ['required ',' numeric'],
            'password' => ['required ',' string ',' min:8 ',' confirmed'],
        ]);
    }

    /*
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    {
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'User_name' => $request->User_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'Street_address' => $request->Street_address,
            'division_ID' => $request->division_ID,
            'district_ID' => $request->district_ID,
            'ip_address' => request()->ip(),
            'password' => Hash::make($request->password),
            'remember_token' =>'jjjjjjjj',
            'status' =>0

        

        ]);


        $user->notify(new verifyRegistration($user));
        session()->flash('sucess','a mail is send');
        return redirect('login'); 
     

    }
}
