<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtapaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etapa', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Nombre', 50);
            $table->dateTime('FechaInicio');
            $table->dateTime('FechaFin');
            $table->tinyInteger('Actual');
            $table->integer('IdEtapa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etapa');
    }
}
