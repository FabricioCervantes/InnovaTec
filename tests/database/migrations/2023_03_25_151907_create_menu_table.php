<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Nombre', 50);
            $table->string('Controlador', 50);
            $table->string('Metodo', 50);
            $table->tinyInteger('Activo');
            $table->string('IdPadre', 64)->nullable();
            $table->bigInteger('Orden');
            $table->integer('Nivel');
            $table->string('Icono', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
