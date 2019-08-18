<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User_site;
use Illuminate\Http\Request;
use App\AromLibrary\AbstractClasses\Authentication;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Authentication
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
    protected $redirectTo = '/';

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
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $sites = User_site::all();
        return view('auth.register', compact('sites'));
    }



    /**
     * @param Request $request
     * @return  page
     */

    public function postSignUp(Request $request)
    {

        $return = $this->signUp($request);
        if ($return['error'] == 0) {
            if (Auth::loginUsingId($return['data']->id)) {
//                return redirect('/projects');
                return redirect('/welcome');
            }

        } else {
            return redirect('/signup');

        }


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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'site_id' => $data['site'],
//            'password' => Hash::make($data['password']),
//        ]);
    }
}
