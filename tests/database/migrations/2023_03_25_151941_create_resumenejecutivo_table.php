<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumenejecutivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumenejecutivo', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdCategoria', 64);
            $table->string('IdEdicion', 64);
            $table->string('idEtapa', 64)->nullable();
            
            $table->foreign('IdCategoria', 'FK_ResumenEjecutivo_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEdicion', 'FK_ResumenEjecutivo_Ediciones')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumenejecutivo');
    }
}
