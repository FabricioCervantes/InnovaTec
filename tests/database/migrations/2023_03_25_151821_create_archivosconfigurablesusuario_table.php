<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosconfigurablesusuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivosconfigurablesusuario', function (Blueprint $table) {
            $table->string('IdArchivosUsuario', 64)->primary();
            $table->string('IdArchivoConfigurable', 64);
            $table->string('IdUsuario', 64);
            
            $table->foreign('IdArchivoConfigurable', 'FK_ArchivosConfigurablesUsuario_ArchivosConfigurables')->references('IdArchivo')->on('archivosconfigurables')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdUsuario', 'FK_ArchivosConfigurablesUsuario_Usuario')->references('Id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivosconfigurablesusuario');
    }
}
