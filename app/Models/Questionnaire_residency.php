<?php

namespace App\Models;

use App\Models\Project_manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Questionnaire_residency extends Model
{
    protected $table = 'questionnaire_residency';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name',
        'created_at', 'updated_at',
    ];


    public function question()
    {
        return $this->hasMany('App\Models\Questionnaire', 'section_id');
    }


    public function project()
    {
        return $this->belongsTo('App\Models\project', 'project_id');
    }

}
