<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Credito extends Model
{

	protected $fillable = [
        'user_id', 
        'admin_id',
        'almacen_id',
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
		return $this->orderBy('created_at' , 'desc')->get();
	}

    public function cuotasDetalladas()
    {
    	return $this->hasMany(Cuota::class , 'credito_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class , 'user_id');
    }

    public function almacen()
    {
        return $this->belongsTo(User::class , 'almacen_id');
    }

    public function porPagar()
    {
        return $this->where('por_pagar' , '!=' , null)
                    ->where('por_pagar' , '>' , 0)
                    ->where('productos_pagos' , 0)
                    ->get();
    }

    public function estatusCredito($int)
    {
        switch ($int) {
            case 0:
                    return '<div class="badge badge-soft-warning">Por aprobar</div>';
                break;

            case 1:
                    return '<div class="badge badge-soft-success">Aprobado</div>';
                break;

            case 2:
                    return '<div class="badge badge-soft-danger">Negado</div>';
                break;
            
            default:
                    return 'No definido';
                break;
        }
    }

    //estadisticas

    public function creditosMes()
    {
        return $this->whereMonth('created_at' , date('m'))->get()->count();
    }

    public function ingresosMes()
    {
        return $this->select(DB::raw(' (monto - por_pagar) as ganancia '))
                    ->whereMonth('created_at' , date('m'))
                    ->get()
                    ->sum('ganancia');
    }

    public function pagosMes()
    {
        return $this->whereMonth('created_at' , date('m'))->get()->sum('por_pagar');
    }

    public function creditosPorMes()
    {
        for ($i = 0; $i < 12; $i++) {

            $data[$i] = $this->whereYear('created_at' , date('Y') )
                        ->whereMonth('created_at' , $i + 1)
                        ->get()
                        ->count();

        }

        return $data;
    }

    public function pagosPorMes()
    {
        for ($i = 0; $i < 12; $i++){
            $data[$i] = round(
                            $this->whereYear('created_at' , date('Y') )
                            ->whereMonth('created_at' , $i + 1)
                            ->get()
                            ->sum('por_pagar')
                        );
        }
        

        return $data;
    }

    public function ingresosPorMes()
    {

        for ($i = 0; $i < 12; $i++){
            $data[$i] = round(
                            $this->select(DB::raw(' (monto - por_pagar) as ganancia '))
                                ->whereYear('created_at' , date('Y') )
                                ->whereMonth('created_at' , $i + 1)
                                ->get()
                                ->sum('ganancia')
                        );
        }

        return $data;
    }

    public function totalEstatusCreditos()
    {
        for ($i = 0; $i < 3; $i++){
            $data[$i] = round(
                            $this->where('estatus' , $i )
                                ->whereMonth('created_at' , date('m'))
                                ->get()
                                ->count()
                        );
        }

        return $data;
    }
}
