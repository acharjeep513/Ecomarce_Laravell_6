<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\district;
use App\division;

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
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'User_name' => $data['User_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'Street_address' => $data['Street_address'],
            'division_ID' => $data['division_ID'],
            'district_ID' => $data['district_ID'],
            'ip_address' => request()->ip(),
            'password' => Hash::make($data['password']),




        ]);
    }
}
