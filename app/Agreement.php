<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Institution;
use App\Area;
use App\Objective;
use App\Activity;

class Agreement extends Model
{
    protected $table ='agreements';
    
    protected $fillable = [
        'id', 'estado','nombre', 'fecha_inicio','fecha_termino', 'fecha_firma', 'fecha_decreto',
        'decreto', 'vigente', 'vigencia', 'tipo', 'descripcion'
    ];

    public $timestamps = false;

    public function users(){
        return $this->belongsToMany('User', 'agreement_user')
        ->withPivot('user_id', 'status');
    }

    public function institutions(){
        return $this->belongsToMany('Institution', 'agreement_institution')
        ->withPivot('institution_id', 'status');
    }

    public function objectives(){
        return $this->hasMany('Objective');
    }

    public function areas(){
        return $this->hasMany('Area');
    }

    public function activities(){
        return $this->hasMany('App\Activity');
    }
}
