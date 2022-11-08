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
        Schema::create('detalles_del_pedido',function(Blueprint $table){
            $table->id('id_pedido')->unique();
            $table->integer('id_cliente');
            $table->integer('id_producto');
            $table->integer('id_pago');
            $table->integer('total_productos');
            $table->integer('precio_normal');
            $table->integer('precio_final');
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
