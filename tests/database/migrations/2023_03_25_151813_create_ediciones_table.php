<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ediciones', function (Blueprint $table) {
            $table->string('IdEdicion', 64)->primary();
            $table->string('Nombre', 100);
            $table->dateTime('FechaInicio');
            $table->dateTime('FechaFin');
            $table->tinyInteger('Actual');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ediciones');
    }
}
