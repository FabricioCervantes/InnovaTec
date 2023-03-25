<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionproyectosretroalimentacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacionproyectosretroalimentacion', function (Blueprint $table) {
            $table->bigInteger('Id')->primary();
            $table->string('IdJuez', 64)->nullable();
            $table->string('IdProyecto', 64);
            $table->longText('Comentario');
            $table->tinyInteger('VoboEvaluacion');
            $table->dateTime('FechaVobo');
            $table->string('IdJuezRegional', 64)->nullable();
            $table->string('idFaseSala', 64)->nullable();
            $table->string('IdEtapa', 64)->nullable();
            
            $table->foreign('IdJuezRegional', 'FK_EvaluacionProyectosRetroalimentacion_Jueces')->references('id')->on('jueces')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdJuez', 'FK_EvaluacionProyectosRetroalimentacion_JuecesLocal')->references('Id')->on('jueceslocal')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdProyecto', 'FK_EvaluacionProyectosRetroalimentacion_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacionproyectosretroalimentacion');
    }
}
