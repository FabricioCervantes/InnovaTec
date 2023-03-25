<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumenejecutivoseccioncamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumenejecutivoseccioncampos', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdResumenEjecutivoSeccion', 64);
            $table->string('IdTipoCampo', 64);
            $table->integer('Maximo');
            $table->string('UnidadMedida', 64);
            
            $table->foreign('UnidadMedida', 'FK_ResumenEjecutivoSeccionCampos_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTipoCampo', 'FK_ResumenEjecutivoSeccionCampos_MemoriaTecnicaLocalTipoCampo1')->references('Id')->on('memoriatecnicalocaltipocampo')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdResumenEjecutivoSeccion', 'FK_ResumenEjecutivoSeccionCampos_ResumenEjecutivoSeccion')->references('Id')->on('resumenejecutivoseccion')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumenejecutivoseccioncampos');
    }
}
