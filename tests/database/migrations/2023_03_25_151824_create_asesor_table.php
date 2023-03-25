<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesor', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Nombre', 150);
            $table->string('IdEscuela', 64)->nullable();
            $table->string('IdTipoAsesor', 64);
            $table->string('RFC', 15);
            $table->tinyInteger('TieneUsuario');
            $table->string('Correo', 300)->nullable();
            $table->string('ApellidoPaterno', 50);
            $table->string('ApellidoMaterno', 50);
            $table->unsignedTinyInteger('Genero')->nullable();
            $table->string('Carrera', 64);
            
            $table->foreign('Carrera', 'FK_Asesor_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEscuela', 'FK_Asesor_Escuelas')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTipoAsesor', 'FK_Asesor_TipoAsesor')->references('Id')->on('tipoasesor')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asesor');
    }
}
