<?php

namespace App\Models;

use App\Models\Project_manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Questionnaire extends Model
{
    protected $table = 'questionnaire';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'project_id', 'section_id', 'sub_section_id', 'question',
        'type', 'image',
        'created_at', 'updated_at',
    ];


    public function project()
    {
        return $this->belongsTo('App\Models\Project', 'project_id');
    }

    public function sections()
    {
        return $this->belongsTo('App\Models\Questionnaire_section', 'section_id');
    }

    public function sub_sections()
    {
        return $this->belongsTo('App\Models\Questionnaire_sub_section', 'sub_section_id');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answer', 'questionnaire_id');
    }


    public function case_answers()
    {
        return $this->hasMany('App\Models\Case_answer', 'questionnaire_id');
    }

    public function question_answer($case_id,$question_id)
    {

        $case_answer = Case_answer::where('case_id',$case_id)->where('questionnaire_id',$question_id)->first();

        return $case_answer;
    }



}
