<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionproyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacionproyectos', function (Blueprint $table) {
            $table->bigInteger('Id')->primary();
            $table->bigInteger('IdRubrica');
            $table->string('IdProyecto', 64);
            $table->string('Idjuez', 64)->nullable();
            $table->integer('Calificacion');
            $table->string('idJuezRegional', 64)->nullable();
            $table->string('idFaseSala', 64)->nullable();
            
            $table->foreign('idJuezRegional', 'FK_EvaluacionProyectos_Jueces')->references('id')->on('jueces')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Idjuez', 'FK_EvaluacionProyectos_JuecesLocal')->references('Id')->on('jueceslocal')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdProyecto', 'FK_EvaluacionProyectos_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdRubrica', 'FK_EvaluacionProyectos_Rubricas')->references('Id')->on('rubricas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacionproyectos');
    }
}
