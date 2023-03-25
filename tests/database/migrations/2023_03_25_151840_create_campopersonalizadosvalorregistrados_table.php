<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampopersonalizadosvalorregistradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campopersonalizadosvalorregistrados', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdTabla', 64);
            $table->string('IdCampoPersonalizado', 64);
            $table->longText('Respuesta');
            $table->string('IdRegistro', 64);
            
            $table->foreign('IdCampoPersonalizado', 'FK_CampoPersonalizadosValorRegistrados_CamposPersonalizados')->references('Id')->on('campospersonalizados')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTabla', 'FK_CampoPersonalizadosValorRegistrados_TablaCamposPersonalizados')->references('Id')->on('tablacampospersonalizados')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campopersonalizadosvalorregistrados');
    }
}
