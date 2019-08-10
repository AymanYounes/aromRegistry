<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use phpseclib\Crypt\Hash;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @return view
     */
    public function getIndex()
    {
        if (!Auth::check()) {

            $loginView = view('auth.login');
            return $loginView;
        } else {

            return redirect('/');
        }
    }




    public function postLogin(Request $request) {
//dd($request);




        $auth = (Auth::attempt(['email' => $request->email, 'password' => $request->password], true));
//        dd($auth);
        if(!$auth){
            return redirect('/login');
        }
//        $user = User::where('email', $request->email)->where('password', Hash::make($request->password));
//
//
//        if (Auth::loginUsingId($user->id)) {
//
//            return redirect('/projects');
//        }
        return redirect('/projects');
    }


    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }




}
