<?php

namespace App\Models;

use App\Models\Project_manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Project extends Model
{
    protected $table = 'projects';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'name_full', 'image', 'short_desc',
        'objectives', 'study_design', 'outcome_variables', 'analysis_plan',
        'created_at', 'updated_at',  'deleted_at'
    ];


    public function managers()
    {
        return $this->hasMany('App\Models\Project_manager', 'project_id');
    }



    public function sections()
    {
        return $this->hasMany('App\Models\Questionnaire_section', 'project_id');
    }

    public function questions()
    {
        return $this->hasMany('App\Models\Questionnaire', 'project_id');
    }
}
