<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectocalificacionesdetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectocalificacionesdetalle', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdProyectoCalificacion', 64);
            $table->decimal('Calificacion', 18, 2);
            $table->string('IdUsuario', 64);
            $table->dateTime('FechaCreacion');
            $table->string('OtrosDatos', 300);
            $table->string('IdProyecto', 64);
            $table->unsignedTinyInteger('Lugar')->nullable();
            
            $table->foreign('IdProyecto', 'FK_ProyectoCalificacionesDetalle_Proyecto1')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdProyectoCalificacion', 'FK_ProyectoCalificacionesDetalle_ProyectoCalificaciones')->references('Id')->on('proyectocalificaciones')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectocalificacionesdetalle');
    }
}
