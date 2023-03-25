<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciaencargadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistenciaencargado', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->integer('IDSala');
            $table->string('UserName', 100);
            $table->string('Password', 500);
            $table->dateTime('Start');
            $table->dateTime('End');
            
            $table->foreign('IDSala', 'FK_AsistenciaEncargado_AsistenciaSalas')->references('ID')->on('asistenciasalas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistenciaencargado');
    }
}
