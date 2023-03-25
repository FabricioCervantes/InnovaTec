<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionfechasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracionfechas', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdEdicion', 64);
            $table->string('IdEscuela', 64);
            $table->dateTime('FechaUno');
            $table->dateTime('FechaDos');
            $table->dateTime('FechaTres');
            $table->dateTime('FechaUnoFin')->nullable();
            $table->dateTime('FechaDosFin')->nullable();
            $table->dateTime('FechaTresFin')->nullable();
            
            $table->foreign('IdEdicion', 'FK_ConfiguracionFechas_Ediciones')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEscuela', 'FK_ConfiguracionFechas_Escuelas')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracionfechas');
    }
}
