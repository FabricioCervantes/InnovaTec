<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcionescampospersonalizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcionescampospersonalizados', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdCampoPersonalizado', 64);
            $table->string('Valor', 250);
            $table->string('IdTipoOpcion', 64)->nullable();
            $table->tinyInteger('Activo')->nullable();
            
            $table->foreign('IdCampoPersonalizado', 'FK_OpcionesCamposPersonalizados_CamposPersonalizados')->references('Id')->on('campospersonalizados')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTipoOpcion', 'FK_OpcionesCamposPersonalizados_TipoOpcionesCamposPersonalizado')->references('Id')->on('tipoopcionescampospersonalizado')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opcionescampospersonalizados');
    }
}
