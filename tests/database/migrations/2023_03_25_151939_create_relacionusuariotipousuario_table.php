<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionusuariotipousuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacionusuariotipousuario', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdTipoUsuario', 64);
            $table->string('IdUsuario', 64);
            
            $table->foreign('IdTipoUsuario', 'FK_RelacionUsuarioTipoUsuario_IdTipoUsuario')->references('Id')->on('tipousuario')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdUsuario', 'FK_RelacionUsuarioTipoUsuario_Usuarios')->references('Id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacionusuariotipousuario');
    }
}
