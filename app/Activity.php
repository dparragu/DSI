<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Agreement;
use App\User;

class Activity extends Model
{
    protected $table ='activities';

    protected $fillable = [
        'id', 'convenio', 'nombre', 
    ];


    public $timestamps = false;

    public function users(){
        return $this->belongsToMany('User', 'activity_user')
        ->withPivot('user_id', 'status');
    }

    public function agreements(){
        return $this->hasMany('App\Agreement');
    }
}
