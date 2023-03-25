<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumenejecutivoseccioncamposrespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumenejecutivoseccioncamposrespuestas', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdResumenEjecutivoSeccionCampo', 64);
            $table->string('Valor', 0);
            $table->string('IdProyecto', 64);
            
            $table->foreign('IdProyecto', 'FK_ResumenEjecutivoSeccionCamposRespuestas_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdResumenEjecutivoSeccionCampo', 'FK_ResumenEjecutivoSeccionCamposRespuestas_ResumenEjecutivoSec7')->references('Id')->on('resumenejecutivoseccioncampos')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumenejecutivoseccioncamposrespuestas');
    }
}
