<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudcambioproyectodatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudcambioproyectodatos', function (Blueprint $table) {
            $table->string('IdSolicitudCambioNombre', 64)->primary();
            $table->string('IdSolicitud', 64)->nullable();
            $table->string('IdProyecto', 64);
            $table->string('NombreCorto', 50);
            
            $table->foreign('IdProyecto', 'FK_SolicitudCambioProyectoDatos_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdSolicitud', 'FK_SolicitudCambioProyectoDatos_SolicitudCambioProyecto')->references('IdSolicitud')->on('solicitudcambioproyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudcambioproyectodatos');
    }
}
