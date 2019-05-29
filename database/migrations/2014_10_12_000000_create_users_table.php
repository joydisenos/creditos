<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->string('nombre_almacen')->nullable();

            $table->integer('tipo_documento');
            $table->string('numero_documento');
            $table->date('expedicion')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->integer('genero')->nullable();
            $table->integer('estado_civil')->nullable();
            $table->string('foto')->nullable();

            $table->integer('personas_cargo')->nullable();
            $table->integer('tipo_vivienda')->nullable();
            $table->float('limite_credito' , 20 , 2 )->nullable();

            $table->string('telefono_fijo')->nullable();
            $table->string('telefono_celular')->nullable();
            $table->string('telefono_otro')->nullable();

            $table->string('departamento')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('barrio')->nullable();
            $table->string('direccion')->nullable();

            //Referencias
            $table->string('referencia_ocupacion')->nullable();
            $table->string('referencia_ingresos')->nullable();
            $table->string('referencia_nombre_empresa')->nullable();
            $table->string('referencia_telefono_empresa')->nullable();
            $table->string('referencia_extension_empresa')->nullable();
            $table->text('referencia_direccion_empresa')->nullable();
            $table->string('referencia_sucursal_empresa')->nullable();
            $table->string('referencia_telefono_sucursal_empresa')->nullable();
            $table->string('referencia_cargo_empresa')->nullable();
            $table->string('referencia_tiempo_empresa')->nullable();

            //Referencia Personal 1
            $table->string('referencia_personal1_primer_nombre')->nullable();
            $table->string('referencia_personal1_segundo_nombre')->nullable();
            $table->string('referencia_personal1_primer_apellido')->nullable();
            $table->string('referencia_personal1_segundo_apellido')->nullable();
            $table->text('referencia_personal1_direccion')->nullable();
            $table->string('referencia_personal1_telefono_casa')->nullable();
            $table->string('referencia_personal1_telefono_celular')->nullable();
            $table->string('referencia_personal1_parentesco')->nullable();
            $table->string('referencia_personal1_telefono_laboral')->nullable();

            //Referencia Personal 2
            
            $table->string('referencia_personal2_primer_nombre')->nullable();
            $table->string('referencia_personal2_segundo_nombre')->nullable();
            $table->string('referencia_personal2_primer_apellido')->nullable();
            $table->string('referencia_personal2_segundo_apellido')->nullable();
            $table->text('referencia_personal2_direccion')->nullable();
            $table->string('referencia_personal2_telefono_casa')->nullable();
            $table->string('referencia_personal2_telefono_celular')->nullable();
            $table->string('referencia_personal2_parentesco')->nullable();
            $table->string('referencia_personal2_telefono_laboral')->nullable();


            $table->integer('registro_id')->nullable();
            $table->integer('validado_id')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
