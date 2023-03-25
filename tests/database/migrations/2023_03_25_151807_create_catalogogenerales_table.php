<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogogeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogogenerales', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Nombre', 150);
            $table->string('Descripcion', 250);
            $table->tinyInteger('Activo');
            $table->string('IdPadre', 64)->nullable();
            $table->tinyInteger('Cabecera');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogogenerales');
    }
}
