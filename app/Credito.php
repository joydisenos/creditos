<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{

	protected $fillable = [
        'user_id', 
        'admin_id',
        'cuotas',
        'inicial',
        'interes',
        'por_pagar',
        'productos',
        'monto',
        'monto_inicial'
    ];

	public function creditos()
	{
		return $this->all();
	}

    public function cuotasDetalladas()
    {
    	return $this->hasMany(Cuota::class , 'credito_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class , 'user_id');
    }

    public function porPagar()
    {
        return $this->where('por_pagar' , '!=' , null)
                    ->where('por_pagar' , '>' , 0)
                    ->where('productos_pagos' , 0)
                    ->get();
    }
}
