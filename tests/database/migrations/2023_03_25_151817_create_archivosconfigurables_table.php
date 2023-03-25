<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosconfigurablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivosconfigurables', function (Blueprint $table) {
            $table->string('IdArchivo', 64)->primary();
            $table->longText('Nombre');
            $table->string('IdTipoArchivo', 64);
            $table->longText('Formato');
            $table->longText('Descripcion');
            
            $table->foreign('IdTipoArchivo', 'FK_ArchivosConfigurables_CatalogoGeneral')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivosconfigurables');
    }
}
