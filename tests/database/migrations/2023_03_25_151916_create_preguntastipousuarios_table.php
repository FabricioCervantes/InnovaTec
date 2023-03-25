<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntastipousuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntastipousuarios', function (Blueprint $table) {
            $table->string('IdPreguntaTipoUsuaio', 64)->primary();
            $table->string('IdPregunta', 64);
            $table->string('IdTipoUsurio', 64);
            
            $table->foreign('IdPregunta', 'FK_PreguntasTipoUsuarios_Preguntas')->references('IdPregunta')->on('preguntas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntastipousuarios');
    }
}
