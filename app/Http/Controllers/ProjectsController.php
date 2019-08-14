<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Project_manager;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $projects = Project::whereNull('deleted_at')->with('managers')->get();

        return view('projects')->with('projects',$projects);
    }



}
