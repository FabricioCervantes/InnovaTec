<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionpersonatipousuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacionpersonatipousuario', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->integer('IdPersona');
            $table->string('IdTipo', 64);
            
            $table->foreign('IdPersona', 'FK_RelacionPersonaTipoUsuario_Persona')->references('IdPersona')->on('persona')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTipo', 'FK_RelacionPersonaTipoUsuario_TipoUsuario')->references('Id')->on('tipousuario')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacionpersonatipousuario');
    }
}
