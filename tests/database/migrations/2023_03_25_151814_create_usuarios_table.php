<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Nombre', 50);
            $table->tinyInteger('Proteccion');
            $table->tinyInteger('Activo');
            $table->tinyInteger('Bloqueado');
            $table->integer('IntentosLogin');
            $table->longText('Usuario');
            $table->longText('Contrasenia');
            $table->string('Correo', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
