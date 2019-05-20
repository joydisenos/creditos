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

            $table->integer('tipo_documento');
            $table->string('numero_documento');
            $table->date('expedicion')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->integer('genero')->nullable();
            $table->integer('estado_civil')->nullable();
            $table->string('foto')->nullable();

            $table->integer('personas_cargo')->nullable();
            $table->integer('tipo_vivienda')->nullable();
            $table->float('limite_credito')->nullable();

            $table->string('telefono_fijo')->nullable();
            $table->string('telefono_celular')->nullable();
            $table->string('telefono_otro')->nullable();

            $table->string('departamento')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('barrio')->nullable();
            $table->string('direccion')->nullable();

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
