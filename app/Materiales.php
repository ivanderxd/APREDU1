<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materiales extends Model
{
    protected $fillable = [ 
        'nombre', 'descripcion', 'archivo', 'tipo_id'
    ];

    public function tipo(){
        return $this->belongsTo('App\Tipomateriales');
    }
}

