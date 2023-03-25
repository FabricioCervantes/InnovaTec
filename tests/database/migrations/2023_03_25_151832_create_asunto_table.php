<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsuntoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asunto', function (Blueprint $table) {
            $table->string('IdMotivo', 64)->primary();
            $table->string('IdProyecto', 64)->nullable();
            $table->string('Descripcion', 100)->nullable();
            $table->dateTime('Fecha')->nullable();
            
            $table->foreign('IdProyecto', 'FK__Asunto__IdProyec__725BF7F6')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asunto');
    }
}
