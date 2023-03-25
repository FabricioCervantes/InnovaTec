<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampospersonalizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campospersonalizados', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdTabla', 64);
            $table->string('IdTipoCampo', 64);
            $table->string('Etiqueta', 50);
            $table->tinyInteger('Activo')->nullable();
            
            $table->foreign('IdTipoCampo', 'FK_CamposPersonalizados_TipoCampoPersonalizado')->references('Id')->on('tipocampopersonalizado')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campospersonalizados');
    }
}
