<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoalumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectoalumnos', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdAlumno', 64);
            $table->string('IdProyecto', 64);
            $table->tinyInteger('AlumnoLider');
            
            $table->foreign('IdAlumno', 'FK_ProyectoAlumnos_Alumno')->references('Id')->on('alumno')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdProyecto', 'FK_ProyectoAlumnos_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectoalumnos');
    }
}
