<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorreoselectronicosrespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correoselectronicosrespuestas', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdCorreoElectronico', 64);
            $table->string('Asunto', 999);
            $table->dateTime('Fecha');
            $table->longText('Mensaje');
            $table->longText('Remitente')->nullable();
            $table->longText('CCO')->nullable();
            $table->longText('CC')->nullable();
            $table->longText('Destinatario')->nullable();
            $table->string('IdUsuarioEnvio', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('correoselectronicosrespuestas');
    }
}
