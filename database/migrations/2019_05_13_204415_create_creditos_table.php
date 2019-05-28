<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('admin_id')->nullable();
            $table->integer('almacen_id')->nullable();
            $table->integer('cuotas');
            $table->boolean('inicial')->default(0);
            $table->float('interes' , 20 , 2);
            $table->float('monto' , 20 , 2);
            $table->float('por_pagar' , 20 , 2);
            $table->boolean('productos_pagos')->default(0);
            $table->text('productos')->nullable();
            $table->float('monto_inicial' , 20 , 2)->nullable()->default(null);
            $table->integer('estatus')->default(0);
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
        Schema::dropIfExists('creditos');
    }
}
