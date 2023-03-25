<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciaregistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistenciaregistro', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->integer('IDSala');
            $table->string('IDAsistente', 50);
            $table->integer('RegisteredBy');
            $table->timestamp('FechaRegistro')->nullable()->default('current_timestamp()');
            
            $table->foreign('RegisteredBy', 'FK_AsistenciaRegistro_AsistenciaEncargado')->references('ID')->on('asistenciaencargado')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IDSala', 'FK_AsistenciaRegistro_AsistenciaSalas')->references('ID')->on('asistenciasalas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistenciaregistro');
    }
}
