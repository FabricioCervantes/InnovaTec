<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionusuariozonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacionusuariozona', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('IdUsuario', 64);
            $table->string('IdZona', 64);
            
            $table->foreign('IdUsuario', 'FK_RelacionUsuarioZona_Usuarios')->references('Id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdZona', 'FK_RelacionUsuarioZona_Zona')->references('Id')->on('zona')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacionusuariozona');
    }
}
