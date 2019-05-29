<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
        'user_id', 
        'nombre',
        'ruta',
        'estatus'
    ];
}
