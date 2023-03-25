<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionavisoescuelaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacionavisoescuela', function (Blueprint $table) {
            $table->string('IdAvisoEscuela', 64)->primary();
            $table->string('IdAviso', 64);
            $table->string('IdEscuela', 64);
            $table->tinyInteger('SoloEncargado');
            
            $table->foreign('IdAviso', 'FK_RelacionAvisoEscuela_Avisos')->references('IdAviso')->on('avisos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEscuela', 'FK_RelacionAvisoEscuela_Escuelas')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacionavisoescuela');
    }
}
