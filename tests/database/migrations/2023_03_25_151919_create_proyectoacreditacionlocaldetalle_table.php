<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoacreditacionlocaldetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectoacreditacionlocaldetalle', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdAcreditacionLocal', 64);
            $table->unsignedTinyInteger('Lugar');
            $table->tinyInteger('Acredita');
            $table->string('IdUsuario', 64);
            $table->dateTime('FechaCreacion');
            $table->string('OtrosDatos', 0);
            $table->string('IdProyecto', 64);
            $table->string('Idcategoria', 64);
            
            $table->foreign('Idcategoria', 'FK_ProyectoAcreditacionLocalDetalle_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdProyecto', 'FK_ProyectoAcreditacionLocalDetalle_Proyecto1')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdAcreditacionLocal', 'FK_ProyectoAcreditacionLocalDetalle_ProyectoCalificaciones')->references('Id')->on('proyectoacreditacionlocal')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectoacreditacionlocaldetalle');
    }
}
