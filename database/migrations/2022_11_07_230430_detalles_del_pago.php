<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_del_pago',function(Blueprint $table){
            $table->bigIncrements('id_pago')->unique();
            $table->integer('id_cliente');
            $table->integer('id_producto');
            $table->integer('descuento_primera_vez');
            $table->integer('enlace');
            $table->dateTime('fecha')->default(date("Y-m-d H:i:s"));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
