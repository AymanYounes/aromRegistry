<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Case_answer;
use App\Models\Cases;
use App\Models\Patient;
use App\Models\Project;
use App\Models\Questionnaire;
use App\Models\Questionnaire_residency;
use App\Models\Questionnaire_section;
use App\Models\User;
use App\Models\User_site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth' , 'adminCheck']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();

        return view('users' ,compact('users'));
    }


    public function getViewCase($id)
    {

        $cases = Cases::find($id);
        $modaldata['view'] = view('templates.cases_modals')
            ->with('view_case', $cases)
            ->render();

        echo json_encode($modaldata);
    }

    public function getDeleteCase($id)
    {

        $cases = Cases::find($id);

        $patient = Patient::find($cases->patient_id);
        $patient->delete();
        $case_answers = Case_answer::where('case_id', $cases->id)->get();
        foreach($case_answers as $answer){
            $answer->delete();
        }

        $cases->delete();


        $return['success'] = 'deleted successfully';

        echo json_encode($return);
    }

    public function getPrintCase($id)
    {

        $cases = Cases::find($id);
        return view('print_case')
            ->with('view_case', $cases)
            ->render();
    }



        public function getAddCase()
    {

        $projects = Project::all();
        return view('add_case')->with('projects',$projects);
    }


    public function insertCaseAnswersQuestionAndAnswerFields($quesion_id,$answer)
    {

        $return_array =[];
        $question_type = Questionnaire::find($quesion_id);
        if(isset($question_type) &&$question_type-> type != 0){

            $answer_value = Answer::where('answer',$answer)->where('questionnaire_id',$quesion_id)->first();

            $return_array['answer_id'] = $answer_value->id;
            if($answer != null){
                $return_array['answer_value'] = $answer_value->answer;
            }

        }else{
            $return_array['answer_id'] = 0;
            $return_array['answer_value'] = $answer;
        }

        return $return_array;

    }



    public function extractCaseIdFromInputName($inputs)
    {
        $return_array=[];

        foreach($inputs as $key =>$input){

            $key_array = explode("__",$key);

            $key_end = end($key_array);

            if(count($key_array) != 1 && $key_end){
                $return_array[$key_end] = $input;
            }
        }

        return $return_array;
    }
    public function postCreateCase(Request $request)
    {

        if($request->case_id == 0){
            $patient = new Patient();
        }else{
            $patient = Patient::find($request->case_id);
        }


        if(isset($request->patient_name)){
            $patient->name = $request->patient_name;
        }else{
            return [ 'status' => "false", 'message' => 'name', 'case_id'=>''];
        }
        $patient->birthday = $request->birthday;
        $patient->gender = $request->gender;
        $patient->residency = $request->residency;
        if(isset($request->occupation)) {
            $patient->occupation = $request->occupation;
        }
        if(isset($request->weight)) {
            $patient->weight = $request->weight;
        }
        if(isset($request->height)) {
            $patient->height = $request->height;
        }
        if(isset($request->bmi)) {
            $patient->bmi = $request->bmi;
        }
        $patient->smoking = $request->smoking;
        $patient->family_history = $request->family_history;
        $patient->informed_consent = $request->informed_consent;
        $patient->save();



        if($request->case_id == 0){
            $case = new Cases();
        }else{
            $case = Cases::find($request->case_id);
        }

        $case->patient_id = $patient->id;
        $case->user_id = Auth::user()->id;
        $case->project_id = $request->project_id;

        $case->save();




        $answers_array = $this->extractCaseIdFromInputName($request->all());


        foreach($answers_array as $key =>$answer){
            $answer_search = Case_answer::where('case_id' , $case->id)
                ->where('questionnaire_id' , $key)
                ->first();
            $question_answer_values = $this->insertCaseAnswersQuestionAndAnswerFields($key, $answer);

            //Update case
            if($answer_search){
                $insert_answer = $answer_search;
            }//Create Case
            else {
                $insert_answer = new Case_answer();
                $insert_answer->case_id = $case->id;
                $insert_answer->questionnaire_id = $key;
            }

            $insert_answer->answer_id = $question_answer_values['answer_id'];
            $insert_answer->answer = $question_answer_values['answer_value'];
            $insert_answer->save();

        }


        return [ 'status' => "true", 'message' => '', 'case_id'=>$case->id];


    }

    public function getAddProjectCase($project_id)
    {

        $site = User_site::find(Auth::user()->site_id);
        $project = Project::find($project_id);
        $q_sections = Questionnaire_section::all();
        $residencies = Questionnaire_residency::all();

        return view('add_project_case')
            ->with('project',$project)
            ->with('q_sections',$q_sections)
            ->with('residencies',$residencies)
            ->with('site',$site);
    }
}
