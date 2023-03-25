<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudcambioasesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudcambioasesor', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdSolicitudCambio', 64);
            $table->string('IdProyecto', 64);
            $table->string('IdAsesor', 64);
            $table->string('Nombre', 150)->nullable();
            $table->string('IdEscuela', 64)->nullable();
            $table->string('IdTipoAsesor', 64)->nullable();
            $table->string('RFC', 15)->nullable();
            $table->string('Correo', 300)->nullable();
            $table->string('ApellidoPäterno', 50)->nullable();
            $table->string('ApellidoMaterno', 50)->nullable();
            $table->integer('TipoCambuo');
            
            $table->foreign('IdAsesor', 'FK_SolicitudCambioAsesor_Asesor')->references('Id')->on('asesor')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdSolicitudCambio', 'FK_SolicitudCambioAsesor_SolicitudCambioProyecto')->references('IdSolicitud')->on('solicitudcambioproyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudcambioasesor');
    }
}
