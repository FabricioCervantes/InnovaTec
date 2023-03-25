<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->bigInteger('Id')->primary();
            $table->string('NombreSala', 50);
            $table->integer('NoSala');
            $table->string('IdEscuela', 64)->nullable();
            $table->string('IdEdicion', 64);
            $table->integer('NoFase');
            $table->string('IdTipoProyecto', 64)->nullable();
            $table->string('IdCategoria', 64)->nullable();
            $table->tinyInteger('Eliminada');
            $table->string('IdFaseSala', 64)->nullable();
            $table->string('IdEtapa', 64)->nullable();
            $table->string('IdZona', 64)->nullable();
            
            $table->foreign('IdCategoria', 'FK_Salas_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdFaseSala', 'FK_Salas_CatalogoGenerales1')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEdicion', 'FK_Salas_Ediciones')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEscuela', 'FK_Salas_Escuelas')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEtapa', 'FK_Salas_Etapa')->references('Id')->on('etapa')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTipoProyecto', 'FK_Salas_TiposProyecto')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdZona', 'FK_Salas_Zona')->references('Id')->on('zona')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salas');
    }
}
