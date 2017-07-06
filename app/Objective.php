<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Agreement;

class Objective extends Model
{
    protected $table ='objectives';

    protected $fillable = [
        'id', 'convenio', 'nombre', 
    ];

    public $timestamps = false;

    public function agreements(){
        return $this->hasMany('Agreement');
    }
    
}
