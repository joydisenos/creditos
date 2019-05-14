<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuotas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('credito_id');
            $table->float('interes' , 16 , 2);
            $table->float('abono' , 16 , 2);
            $table->float('monto' , 16 , 2);
            $table->float('saldo' , 16 , 2);
            $table->date('fecha_pago')->nullable()->default(null);
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
        Schema::dropIfExists('cuotas');
    }
}
