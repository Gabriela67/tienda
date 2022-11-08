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
        Schema::create('productos',function(Blueprint $table){
            $table->bigIncrements('id_producto');
            $table->string('nombre',255);
            $table->string('codigo');
            $table->string('categoria');
            $table->string('imagen');
            $table->string('proveedor');
            $table->integer('stock');
            $table->integer('costo');
            $table->integer('precio');
            $table->string('valoracion');
           
        
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
