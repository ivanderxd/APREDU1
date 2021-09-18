<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipomateriales extends Model
{
    protected $fillable = [ 
        'tipomaterial'
    ];

    public function materiales(){
        return $this->hasMany('App\Materiales');
    }
}
