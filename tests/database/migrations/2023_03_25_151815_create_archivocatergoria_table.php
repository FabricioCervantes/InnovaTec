<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivocatergoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivocatergoria', function (Blueprint $table) {
            $table->string('IdArchivo', 64)->primary();
            $table->string('NombreArchivo', 1000);
            $table->string('TipoArchivo', 500);
            $table->string('IdEdicion', 64);
            $table->string('IdEscuela', 64);
            $table->string('IdCategoria', 64);
            $table->dateTime('FechaCreo');
            $table->string('UsuarioCreo', 64);
            
            $table->foreign('IdCategoria', 'FK_ArchivoCategoria_Categoria')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEdicion', 'FK_ArchivoCategoria_Edicion')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEscuela', 'FK_ArchivoCategoria_Escuela')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('UsuarioCreo', 'FK_ArchivoCategoria_Usuario')->references('Id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivocatergoria');
    }
}
