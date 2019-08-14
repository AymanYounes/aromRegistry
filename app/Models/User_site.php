<?php

namespace App\Models;

use App\Models\Project_manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class User_site extends Model
{
    protected $table = 'user_sites';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name',
        'created_at', 'updated_at',  'deleted_at'
    ];


    public function user()
    {
        return $this->hasMany('App\Models\User', 'site_id');
    }
}
