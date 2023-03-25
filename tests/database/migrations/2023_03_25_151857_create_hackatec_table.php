<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHackatecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackatec', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('IdAlumno', 64)->nullable();
            $table->string('IdAsesor', 64)->nullable();
            $table->string('IdEscuela', 64);
            $table->tinyInteger('ConfirmaNacional')->nullable();
            $table->tinyInteger('TienePaseNacional')->nullable();
            
            $table->foreign('IdAlumno', 'FK_Hackatec_Alumno')->references('Id')->on('alumno')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdAsesor', 'FK_Hackatec_Asesor')->references('Id')->on('asesor')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEscuela', 'FK_Hackatec_Escuelas')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hackatec');
    }
}
