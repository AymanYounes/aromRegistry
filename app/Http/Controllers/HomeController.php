<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\Patient;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cases_count = Cases::all()->count();
        $projects_count = Project::all()->count();
        $patients_count = Patient::all()->count();
        $users_count = User::all()->count();


        $projects = Project::all();
        return view('home' ,compact('projects','cases_count','projects_count','patients_count','users_count'));
    }
}
