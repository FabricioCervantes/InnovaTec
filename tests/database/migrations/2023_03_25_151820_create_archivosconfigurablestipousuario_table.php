<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosconfigurablestipousuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivosconfigurablestipousuario', function (Blueprint $table) {
            $table->string('IdArchivosTipoUsuario', 64)->primary();
            $table->string('IdArchivoConfigurable', 64);
            $table->string('IdTipoUsuario', 64);
            
            $table->foreign('IdArchivoConfigurable', 'FK_ArchivosConfigurablesTipoUsuario_ArchivosConfigurables')->references('IdArchivo')->on('archivosconfigurables')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTipoUsuario', 'FK_ArchivosConfigurablesTipoUsuario_TipoUsuario')->references('Id')->on('tipousuario')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivosconfigurablestipousuario');
    }
}
