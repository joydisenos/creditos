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
        'foto',
        'tipo_documento',
        'numero_documento',
        'expedicion',
        'fecha de nacimiento',
        'genero',
        'estado_civil',
        'personas_cargo',
        'tipo_vivienda',
        'telefono_fijo',
        'telefono_celular',
        'telefono_otro',
        'departamento',
        'ciudad',
        'barrio',
        'direccion',
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

    public function creditos()
    {
        return $this->hasMany(Credito::class , 'user_id');
    }

    public function mensajes()
    {
        return $this->hasMany(Mensaje::class , 'user_id');
    }
}
