<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosarchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectosarchivos', function (Blueprint $table) {
            $table->bigInteger('Id')->primary();
            $table->longText('Url')->nullable();
            $table->string('IdEdicion', 64)->nullable();
            $table->string('IdFase', 64)->nullable();
            $table->string('IdProyecto', 64)->nullable();
            $table->integer('IdTipo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectosarchivos');
    }
}
