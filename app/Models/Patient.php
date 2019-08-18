<?php

namespace App\Models;

use App\Models\Project_manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Patient extends Model
{
    protected $table = 'patients';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'address', 'phone', 'birthday',
        'gender', 'residency', 'occupation', 'weight',
        'height', 'bmi', 'family_history', 'informed_consent',
        'created_at', 'updated_at',  'deleted_at'
    ];


    public function cases()
    {
        return $this->hasMany('App\Models\Cases', 'patient_id');
    }

    public function patient_residency()
    {
        return $this->belongsTo('App\Models\Questionnaire_residency', 'residency');
    }

}
