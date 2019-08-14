<?php

namespace App\Models;

use App\Models\Project_manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Questionnaire_sub_section extends Model
{
    protected $table = 'questionnaire_sub_sections';
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
        return $this->hasMany('App\Models\Questionnaire', 'sub_section_id');
    }


}
