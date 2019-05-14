<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    protected $fillable = [
        'credito_id', 
        'fecha_pago',
        'interes',
        'abono',
        'monto',
        'saldo'
    ];
}
