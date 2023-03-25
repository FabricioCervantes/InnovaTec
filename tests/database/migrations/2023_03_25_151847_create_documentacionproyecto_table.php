<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentacionproyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentacionproyecto', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdCategoria', 64);
            $table->string('Nombre', 1000);
            $table->integer('Longitud');
            $table->string('IdEdicion', 64);
            $table->string('IdEtapa', 64);
            $table->integer('ImagenesTotales');
            $table->integer('Orden');
            $table->string('IdTipoDocumento', 64);
            $table->tinyInteger('Activo');
            
            $table->foreign('IdCategoria', 'FK_DocumentacionProyecto_CatalogoGeneral')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdTipoDocumento', 'FK_DocumentacionProyecto_CatalogoGeneral1')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEdicion', 'FK_DocumentacionProyecto_Edicion')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentacionproyecto');
    }
}
