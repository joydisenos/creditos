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

    public function credito()
    {
        return $this->belongsTo(Credito::class , 'credito_id');
    }

    public function estadisticaPagos()
    {
    	for ($i = 0; $i < 12; $i++){
            $data[$i] =    $this->whereYear('fecha_pago' , date('Y'))
            					->whereMonth('fecha_pago' , $i + 1)
            					->where('estatus' , 1)
                                ->get()
                                ->sum('monto');
        }

        return $data;
    }

    public function estadisticaPagosPendientes()
    {
    	for ($i = 0; $i < 12; $i++){
            $data[$i] =    $this->whereYear('fecha_pago' , date('Y'))
            					->whereMonth('fecha_pago' , $i + 1)
            					->where('estatus' , 0)
                                ->get()
                                ->sum('monto');
        }
 
        return $data;
    }

    public function estatusPago($int)
    {
        switch ($int) {
            case 0:
                return 'Pendiente';
                break;

            case 1:
                return 'Pago';
                break;

            case 2:
                return 'En mora';
                break;
            
            default:
                return 'no definido';
                break;
        }
    }
}
