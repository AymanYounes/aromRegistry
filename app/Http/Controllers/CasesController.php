<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Questionnaire_section;
use App\Models\User;
use App\Models\User_site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CasesController extends Controller
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
        return view('cases');
    }


    public function getAddCase()
    {

        $projects = Project::all();
        return view('add_case')->with('projects',$projects);
    }




    public function getAddProjectCase($project_id)
    {

        $site = User_site::find(Auth::user()->site_id);
        $project = Project::find($project_id);
        $q_sections = Questionnaire_section::all();
//dd($project->questions[0]->answers);
        return view('add_project_case')
            ->with('project',$project)
            ->with('q_sections',$q_sections)
            ->with('site',$site);
    }
}
