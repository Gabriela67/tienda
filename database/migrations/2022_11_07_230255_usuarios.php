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
         Schema::create('usuarios',function(Blueprint $table){
            $table->integer('id_usuario')->primary();
            $table->Integer('rol');
            $table->string('nombre',255);
            $table->integer('edad',3);
            $table->enum('genero',['femenino','masculino']);
            $table->string('imagen',255);
            $table->string('email',255);
            $table->string('contrasena');
            $table->string('usuario')->unique();
            $table->string('pais',255);
            $table->string('direccion');
            $table->string('direccion_envio');


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
