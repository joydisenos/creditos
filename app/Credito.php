<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{

	protected $fillable = [
        'user_id', 'admin_id','cuotas','inicial','interes','monto','monto_inicial'
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
}
