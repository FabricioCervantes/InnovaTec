<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionavisousuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacionavisousuario', function (Blueprint $table) {
            $table->string('IdAvisoUsuario', 64)->primary();
            $table->string('IdAviso', 64);
            $table->string('IdUsuario', 64);
            
            $table->foreign('IdAviso', 'FK_RelacionAvisoUsuario_Avisos')->references('IdAviso')->on('avisos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdUsuario', 'FK_RelacionAvisoUsuario_Usuarios')->references('Id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacionavisousuario');
    }
}
