<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudcambioproyectoalumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudcambioproyectoalumno', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdSolicitudCambio', 64);
            $table->string('IdAlumno', 64);
            $table->string('Nombre', 350)->nullable();
            $table->string('NumeroControl', 350)->nullable();
            $table->string('Correo', 300)->nullable();
            $table->string('IdEscuela', 64)->nullable();
            $table->string('Semestre', 64)->nullable();
            $table->string('CURP', 18)->nullable();
            $table->string('IdCarrera', 64)->nullable();
            $table->string('ApellidoPaterno', 250)->nullable();
            $table->string('ApellidoMaterno', 250)->nullable();
            $table->integer('TipoModificacion');
            $table->string('IdProyecto', 64);
            $table->tinyInteger('Lider');
            
            $table->foreign('IdAlumno', 'FK_SolicitudCambioProyectoAlumno_Alumno')->references('Id')->on('alumno')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdSolicitudCambio', 'FK_SolicitudCambioProyectoAlumno_SolicitudCambioProyecto')->references('IdSolicitud')->on('solicitudcambioproyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudcambioproyectoalumno');
    }
}
