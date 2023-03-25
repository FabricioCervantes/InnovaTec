<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectocalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectocalificaciones', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdEdicion', 64);
            $table->string('IdEtapa', 64);
            $table->string('IdEscuela', 64);
            $table->string('RutaComprobante', 800);
            $table->tinyInteger('PuedeIntentarSubir');
            $table->string('IdCategoria', 64);
            $table->string('IdUsuario', 64);
            $table->dateTime('FechaCreacion');
            $table->dateTime('FechaModificacion');
            $table->string('IdUsuarioModifico', 64);
            $table->string('IdTipoProyecto', 64)->nullable();
            
            $table->foreign('IdCategoria', 'FK_ProyectoCalificaciones_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTipoProyecto', 'FK_ProyectoCalificaciones_CatalogoGenerales1')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEdicion', 'FK_ProyectoCalificaciones_Ediciones')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEscuela', 'FK_ProyectoCalificaciones_Escuelas')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectocalificaciones');
    }
}
