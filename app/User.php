<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Agreement;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rut', 'name', 'paterno', 'materno', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function agreements(){
        return $this->belongsToMany('Agreement', 'agreement_user')
        ->withPivot('agreement_id', 'status');
    }

    public function activities(){
        return $this->belongsToMany('Activity', 'activity_user')
        ->withPivot('activity_id', 'status');
    }

}
