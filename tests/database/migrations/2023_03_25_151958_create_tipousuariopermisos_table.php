<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipousuariopermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipousuariopermisos', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdTipoUsuario', 64);
            $table->string('IdPantalla', 64);
            $table->tinyInteger('Ver');
            $table->tinyInteger('Editar');
            $table->tinyInteger('Crear');
            $table->tinyInteger('Eliminar');
            $table->tinyInteger('Imprimir');
            
            $table->foreign('IdPantalla', 'FK_TipoUsuarioPermisos_Menu')->references('Id')->on('menu')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTipoUsuario', 'FK_TipoUsuarioPermisos_TipoUsuario')->references('Id')->on('tipousuario')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipousuariopermisos');
    }
}
