<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionavisozonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacionavisozona', function (Blueprint $table) {
            $table->string('IdAvisoZona', 64)->primary();
            $table->string('IdAviso', 64);
            $table->string('IdZona', 64);
            $table->tinyInteger('SoloEncargado');
            
            $table->foreign('IdAviso', 'FK_RelacionAvisoZona_Avisos')->references('IdAviso')->on('avisos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdZona', 'FK_RelacionAvisoZona_Zona')->references('Id')->on('zona')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacionavisozona');
    }
}
