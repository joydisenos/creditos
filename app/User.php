<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'primer_nombre', 
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'nombre_almacen',
        'foto',
        'tipo_documento',
        'numero_documento',
        'expedicion',
        'fecha de nacimiento',
        'genero',
        'estado_civil',
        'personas_cargo',
        'limite_credito',
        'tipo_vivienda',
        'telefono_fijo',
        'telefono_celular',
        'telefono_otro',
        'departamento',
        'ciudad',
        'barrio',
        'direccion',
        'referencia_ocupacion',
        'referencia_ingresos',
        'referencia_nombre_empresa',
        'referencia_telefono_empresa',
        'referencia_extension_empresa',
        'referencia_direccion_empresa',
        'referencia_sucursal_empresa',
        'referencia_telefono_sucursal_empresa',
        'referencia_cargo_empresa',
        'referencia_tiempo_empresa',
        'referencia_personal1_primer_nombre',
        'referencia_personal1_segundo_nombre',
        'referencia_personal1_primer_apellido',
        'referencia_personal1_segundo_apellido',
        'referencia_personal1_direccion',
        'referencia_personal1_telefono_casa',
        'referencia_personal1_telefono_celular',
        'referencia_personal1_parentesco',
        'referencia_personal1_telefono_laboral',
        'referencia_personal2_primer_nombre',
        'referencia_personal2_segundo_nombre',
        'referencia_personal2_primer_apellido',
        'referencia_personal2_segundo_apellido',
        'referencia_personal2_direccion',
        'referencia_personal2_telefono_casa',
        'referencia_personal2_telefono_celular',
        'referencia_personal2_parentesco',
        'referencia_personal2_telefono_laboral',
        'registro_id',
        'validado_id',
        'email', 
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function usuarios()
    {
        return $this->all();
    }

    public function usuariosConCredito()
    {
        return $this->where('limite_credito' , '!=' , null)
                    ->where('limite_credito' , '>' , 0)
                    ->where('validado_id' , '!=' , null)
                    ->get();
    }

    public function creditos()
    {
        return $this->hasMany(Credito::class , 'user_id');
    }

    public function documentos()
    {
        return $this->hasMany(Documento::class , 'user_id');
    }

    public function mensajes()
    {
        return $this->hasMany(Mensaje::class , 'user_id');
    }

    public function mensajesNoLeidos()
    {
        return Mensaje::where('user_id' , $this->id)->where('leido' , 0)->get();
    }

    public function validadoPor()
    {
        return $this->belongsTo(User::class , 'validado_id');
    }

    public function registradoPor()
    {
        return $this->belongsTo(User::class , 'registro_id');
    }
}
