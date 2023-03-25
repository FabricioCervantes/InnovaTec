<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionavisotipousuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacionavisotipousuario', function (Blueprint $table) {
            $table->string('IdRelacionAvisoTipoUsuario', 64)->primary();
            $table->string('IdAviso', 64);
            $table->string('IdTipoUsuario', 64);
            
            $table->foreign('IdAviso', 'FK_RelacionAvisoTipoUsuario_Avisos')->references('IdAviso')->on('avisos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTipoUsuario', 'FK_RelacionAvisoTipoUsuario_TipoUsuario')->references('Id')->on('tipousuario')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacionavisotipousuario');
    }
}
