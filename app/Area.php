<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Agreement;

class Area extends Model
{
    protected $table ='areas';

    protected $fillable = [
        'id', 'convenio', 'nombre',
    ];

    public $timestamps = false;

    public function agreements(){
        return $this->hasMany('Agreement');
    }
}
