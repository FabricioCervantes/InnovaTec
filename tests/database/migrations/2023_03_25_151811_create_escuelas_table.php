<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->string('IdEscuela', 64)->primary();
            $table->string('Usuario', 50);
            $table->string('Abrebiacion', 50);
            $table->string('Nombre', 50);
            $table->string('IdMunicipio', 64);
            $table->tinyInteger('TieneCuenta');
            $table->string('Correo', 150)->nullable();
            $table->string('NombreResposable', 250)->nullable();
            $table->string('Telefono', 20)->nullable();
            
            $table->foreign('IdMunicipio', 'FK_Escuelas_Municipio')->references('Id')->on('municipio')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escuelas');
    }
}
