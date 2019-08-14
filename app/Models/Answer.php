<?php

namespace App\Models;

use App\Models\Project_manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Answer extends Model
{
    protected $table = 'answers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'questionnaire_id', 'answer',
        'created_at', 'updated_at',
    ];


    public function question()
    {
        return $this->hasMany('App\Models\answer', 'questionnaire_id');
    }

}
