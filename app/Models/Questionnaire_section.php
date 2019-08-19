<?php

namespace App\Models;

use App\Models\Project_manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Questionnaire_section extends Model
{
    protected $table = 'questionnaire_sections';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'name_short',
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

    public function sub_section()
    {
        return $this->belongsTo('App\Models\Questionnaire_sub_section', 'project_id');
    }

}
