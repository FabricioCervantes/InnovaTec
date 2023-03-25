<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtributocampospersonalizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atributocampospersonalizados', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdCampoPersonalizado', 64);
            $table->string('IdTipoAtributo', 64);
            $table->string('Valor', 100);
            
            $table->foreign('IdCampoPersonalizado', 'FK_AtributoCamposPersonalizados_CamposPersonalizados')->references('Id')->on('campospersonalizados')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTipoAtributo', 'FK_AtributoCamposPersonalizados_TipoAtributosCamposPersonaliza8')->references('Id')->on('tipoatributoscampospersonalizados')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atributocampospersonalizados');
    }
}
