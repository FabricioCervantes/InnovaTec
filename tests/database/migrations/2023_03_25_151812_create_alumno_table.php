<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Nombre', 350);
            $table->string('NumeroControl', 50);
            $table->string('Correo', 300);
            $table->string('IdEscuela', 64);
            $table->string('Semestre', 64)->nullable();
            $table->tinyInteger('TieneCuenta');
            $table->string('CURP', 18);
            $table->string('IdCarrera', 64)->nullable();
            $table->string('ApellidoPaterno', 250)->nullable();
            $table->string('ApellidoMaterno', 250)->nullable();
            $table->tinyInteger('AgregadoPorEscuela')->nullable();
            $table->integer('Genero')->nullable();
            $table->string('Telefono', 30)->nullable();
            
            $table->foreign('Semestre', 'FK_Alumno_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdCarrera', 'FK_Alumno_CatalogoGenerales1')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEscuela', 'FK_Alumno_Escuelas')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
}
