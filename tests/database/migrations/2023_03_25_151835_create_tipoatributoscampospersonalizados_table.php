<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoatributoscampospersonalizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoatributoscampospersonalizados', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Nombre', 150);
            $table->string('Descripcion', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoatributoscampospersonalizados');
    }
}
