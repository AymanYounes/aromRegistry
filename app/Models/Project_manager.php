<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Project_manager extends Model
{
    protected $table = 'project_managers';
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


    public function project()
    {
        return $this->belongsTo('App\Models\Project', 'project_id');
    }
}
