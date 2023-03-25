<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemoriatecnicalocalseccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memoriatecnicalocalseccion', function (Blueprint $table) {
            $table->string('IdMemoriaTecnicaLocal', 64);
            $table->string('Id', 64)->primary();
            $table->string('NombreSeccion', 450);
            $table->string('Objetivo', 450);
            $table->integer('Orden');
            
            $table->foreign('IdMemoriaTecnicaLocal', 'FK_MemoriaTecnicaLocalSeccion_MemoriaTecnicaLocal')->references('Id')->on('memoriatecnicalocal')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memoriatecnicalocalseccion');
    }
}
