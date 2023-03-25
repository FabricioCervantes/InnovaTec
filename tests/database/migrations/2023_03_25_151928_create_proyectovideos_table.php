<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectovideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectovideos', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->integer('NVideo');
            $table->string('Ruta', 400)->nullable();
            $table->string('Formato', 400)->nullable();
            $table->string('IdProyecto', 64);
            
            $table->foreign('IdProyecto', 'FK_ProyectoVideos_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectovideos');
    }
}
