<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemoriatecnicalocalseccioncamposrespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memoriatecnicalocalseccioncamposrespuestas', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdMemoriaTecnicaLocalSeccionCampo', 64);
            $table->string('Valor', 500);
            $table->string('IdProyecto', 64);
            
            $table->foreign('IdMemoriaTecnicaLocalSeccionCampo', 'FK_MemoriaTecnicaLocalSeccionCamposRespuestas_MemoriaTecnicaLo9')->references('Id')->on('memoriatecnicalocalseccioncampos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdProyecto', 'FK_MemoriaTecnicaLocalSeccionCamposRespuestas_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memoriatecnicalocalseccioncamposrespuestas');
    }
}
