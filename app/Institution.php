<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Agreement;

class Institution extends Model
{
    protected $table ='institutions';

    protected $fillable = [
        'id', 'nombre',
    ];

    public $timestamps = false;

    public function agreements(){
        return $this->belongsToMany('Agreement', 'agreement_institution')
        ->withPivot('agreement_id', 'status');
    }
    
}
