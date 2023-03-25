<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoportedetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soportedetalles', function (Blueprint $table) {
            $table->string('IdSoporteDetalles', 64)->primary();
            $table->string('IdSoporte', 64);
            $table->string('IdUsuario', 64);
            $table->longText('Texto');
            $table->dateTime('Fecha');
            $table->string('IdTipoUsuario', 64)->nullable();
            
            $table->foreign('IdSoporte', 'FK_SoporteDetalles_Soporte')->references('Id')->on('soporte')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdUsuario', 'FK_SoporteDetalles_Usuario')->references('Id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soportedetalles');
    }
}
