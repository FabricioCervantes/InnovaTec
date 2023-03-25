<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosconfigurablesescuelaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivosconfigurablesescuela', function (Blueprint $table) {
            $table->string('IdArchivosEscuela', 64)->primary();
            $table->string('IdArchivoConfigurable', 64);
            $table->string('IdEscuela', 64);
            
            $table->foreign('IdArchivoConfigurable', 'FK_ArchivosConfigurablesEscuela_ArchivosConfigurables')->references('IdArchivo')->on('archivosconfigurables')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEscuela', 'FK_ArchivosConfigurablesEscuela_Escuela')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivosconfigurablesescuela');
    }
}
