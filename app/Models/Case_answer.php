<?php

namespace App\Models;

use App\Models\Project_manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Case_answer extends Model
{
    protected $table = 'case_answers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'case_id', 'questionnaire_id', 'answer',
        'created_at', 'updated_at',  'deleted_at'
    ];


    public function cases()
    {
        return $this->belongsTo('App\Models\Cases', 'case_id');
    }

    public function question()
    {
        return $this->belongsTo('App\Models\Questionnaire', 'questionnaire_id');
    }


    public function answer()
    {
        return $this->belongsTo('App\Models\Answer', 'answer_id');
    }


}
