<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avisos', function (Blueprint $table) {
            $table->string('IdAviso', 64)->primary();
            $table->dateTime('FechaInicio');
            $table->dateTime('FechaFin');
            $table->integer('Tipo');
            $table->string('Aviso', 300);
            $table->string('Titulo', 150);
            $table->integer('Prioridad');
            $table->tinyInteger('Mostrar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avisos');
    }
}
