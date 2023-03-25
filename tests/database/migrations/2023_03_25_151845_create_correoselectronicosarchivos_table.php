<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorreoselectronicosarchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correoselectronicosarchivos', function (Blueprint $table) {
            $table->string('id', 64)->primary();
            $table->string('IdCorreoElectronico', 64);
            $table->string('RutaDocumento', 350);
            $table->string('Nombre', 350);
            $table->string('TipoDocumento', 350);
            
            $table->foreign('IdCorreoElectronico', 'FK_CorreosElectronicosArchivos_CorreosElectronicos')->references('Id')->on('correoselectronicos')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('correoselectronicosarchivos');
    }
}
