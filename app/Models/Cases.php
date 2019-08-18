<?php

namespace App\Models;

use App\Models\Project_manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cases extends Model
{
    protected $table = 'cases';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'project_id', 'patient_id',
        'created_at', 'updated_at',  'deleted_at'
    ];


    public function patient()
    {
        return $this->belongsTo('App\Models\Patient', 'patient_id');
    }

    public function project()
    {
        return $this->belongsTo('App\Models\Project', 'project_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function case_answers()
    {
        return $this->hasMany('App\Models\Case_answer', 'case_id');
    }

}
