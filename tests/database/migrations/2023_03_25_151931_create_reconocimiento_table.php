<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReconocimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reconocimiento', function (Blueprint $table) {
            $table->integer('IdReconocimiento')->primary();
            $table->integer('IdPersona');
            $table->string('IdProyecto', 64);
            $table->string('IdEscuela', 64);
            $table->integer('IdRegion');
            $table->string('ClaveReconocimiento', 50)->nullable();
            $table->integer('IdMensaje')->nullable();
            $table->string('PlantillaPdf', 500)->nullable();
            
            $table->foreign('IdEscuela', 'FK_Reconocimiento_Escuelas')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdMensaje', 'FK_Reconocimiento_Mensaje')->references('Id')->on('reconocimientomensaje')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdPersona', 'FK_Reconocimiento_Persona')->references('IdPersona')->on('persona')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdProyecto', 'FK_Reconocimiento_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdRegion', 'FK_Reconocimiento_Region')->references('IdRegion')->on('reconocimientoregion')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reconocimiento');
    }
}
