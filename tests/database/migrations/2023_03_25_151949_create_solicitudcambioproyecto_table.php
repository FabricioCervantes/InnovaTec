<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudcambioproyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudcambioproyecto', function (Blueprint $table) {
            $table->string('IdSolicitud', 64)->primary();
            $table->string('IdEscuela', 64);
            $table->string('Oficio', 350);
            $table->string('Proyecto', 64);
            $table->integer('Estatus');
            $table->string('MotivoDeclinado', 250)->nullable();
            $table->tinyInteger('Visto');
            $table->dateTime('FechaSolicitud');
            $table->dateTime('FechaRespuesta')->nullable();
            $table->string('IdUsuarioRespuesta', 64)->nullable();
            $table->tinyInteger('Eliminado');
            $table->string('IdElimino', 64)->nullable();
            $table->string('IdEdicion', 64);
            $table->string('IdEtapa', 64);
            
            $table->foreign('IdEscuela', 'FK_SolicitudCambioProyecto_Escuelas')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Proyecto', 'FK_SolicitudCambioProyecto_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudcambioproyecto');
    }
}
