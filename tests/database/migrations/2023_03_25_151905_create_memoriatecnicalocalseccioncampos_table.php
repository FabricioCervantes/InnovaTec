<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemoriatecnicalocalseccioncamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memoriatecnicalocalseccioncampos', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdMemoriaTecnicaLocalSeccion', 64);
            $table->string('IdTipoCampo', 64);
            $table->integer('Maximo');
            $table->string('UnidadMedida', 64);
            
            $table->foreign('UnidadMedida', 'FK_MemoriaTecnicaLocalSeccionCampos_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdMemoriaTecnicaLocalSeccion', 'FK_MemoriaTecnicaLocalSeccionCampos_MemoriaTecnicaLocalSeccion')->references('Id')->on('memoriatecnicalocalseccion')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTipoCampo', 'FK_MemoriaTecnicaLocalSeccionCampos_MemoriaTecnicaLocalTipoCampo')->references('Id')->on('memoriatecnicalocaltipocampo')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memoriatecnicalocalseccioncampos');
    }
}
