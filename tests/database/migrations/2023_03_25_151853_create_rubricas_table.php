<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubricasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubricas', function (Blueprint $table) {
            $table->bigInteger('Id')->primary();
            $table->string('IdEdicion', 64);
            $table->integer('idEtapa');
            $table->string('NombreRubrica', 200);
            $table->integer('Maximo');
            $table->integer('Minimo');
            $table->string('Categoria', 64)->nullable();
            $table->string('TipoJuez', 64)->nullable();
            $table->string('TipoProyecto', 64)->nullable();
            $table->string('Seccion', 64)->nullable();
            
            $table->foreign('Categoria', 'FK_Rubricas_Categoria')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEdicion', 'FK_Rubricas_Ediciones')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Seccion', 'FK_Rubricas_Secciones')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('TipoJuez', 'FK_Rubricas_TipoJuez')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('TipoProyecto', 'FK_Rubricas_TipoProyecto')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubricas');
    }
}
