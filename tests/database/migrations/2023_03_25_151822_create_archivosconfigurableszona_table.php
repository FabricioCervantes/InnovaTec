<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosconfigurableszonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivosconfigurableszona', function (Blueprint $table) {
            $table->string('IdArchivosZona', 64)->primary();
            $table->string('IdArchivoConfigurable', 64);
            $table->string('IdZona', 64);
            
            $table->foreign('IdArchivoConfigurable', 'FK_ArchivosConfigurablesZona_ArchivosConfigurables')->references('IdArchivo')->on('archivosconfigurables')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdZona', 'FK_ArchivosConfigurablesZona_Zona')->references('Id')->on('zona')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivosconfigurableszona');
    }
}
