<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectorequerimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectorequerimiento', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdRequerimineto', 64);
            $table->string('Respuesta', 300);
            $table->string('IdProyecto', 64);
            
            $table->foreign('IdProyecto', 'FK_ProyectoRequerimiento_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectorequerimiento');
    }
}
