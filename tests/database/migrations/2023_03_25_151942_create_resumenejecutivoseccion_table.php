<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumenejecutivoseccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumenejecutivoseccion', function (Blueprint $table) {
            $table->string('IdResumenEjecutivo', 64);
            $table->string('Id', 64)->primary();
            $table->string('NombreSeccion', 450);
            $table->string('Objetivo', 0);
            $table->integer('Orden');
            
            $table->foreign('IdResumenEjecutivo', 'FK_ResumenEjecutivoSeccionResumenEjecutivo')->references('Id')->on('resumenejecutivo')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumenejecutivoseccion');
    }
}
