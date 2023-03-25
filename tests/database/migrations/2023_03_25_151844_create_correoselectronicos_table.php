<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorreoselectronicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correoselectronicos', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Asunto', 999);
            $table->dateTime('Fecha');
            $table->longText('Mensaje');
            $table->longText('Remitente')->nullable();
            $table->longText('CCO')->nullable();
            $table->longText('CC')->nullable();
            $table->longText('Destinatario')->nullable();
            $table->longText('NombreRemitente')->nullable();
            $table->longText('NombreCCO')->nullable();
            $table->longText('NombreCC')->nullable();
            $table->tinyInteger('TieneArchivos');
            $table->tinyInteger('Visto')->nullable();
            $table->string('IdUsuarioVio', 64)->nullable();
            $table->tinyInteger('TieneRespuestas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('correoselectronicos');
    }
}
