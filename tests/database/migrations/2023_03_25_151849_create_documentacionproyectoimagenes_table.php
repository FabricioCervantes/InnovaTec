<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentacionproyectoimagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentacionproyectoimagenes', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdRespuestaCampo', 64);
            $table->string('Ruta', 400);
            $table->string('Nombre', 400);
            
            $table->foreign('IdRespuestaCampo', 'FK_DocumentacionProyectoImagenes_DocumentacionProyectoValores')->references('Id')->on('documentacionproyectovalores')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentacionproyectoimagenes');
    }
}
