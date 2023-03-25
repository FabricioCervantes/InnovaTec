<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaindicadoresproyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablaindicadoresproyectos', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('IdZona', 64)->nullable();
            $table->string('Zona', 200)->nullable();
            $table->string('IdEstado', 64)->nullable();
            $table->string('Estado', 200)->nullable();
            $table->string('IdMunicipio', 64)->nullable();
            $table->string('Municipio', 200)->nullable();
            $table->string('IdEscuela', 64)->nullable();
            $table->string('Escuela', 200)->nullable();
            $table->string('IdCategoria', 64)->nullable();
            $table->string('Categoria', 200)->nullable();
            $table->integer('Total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tablaindicadoresproyectos');
    }
}
