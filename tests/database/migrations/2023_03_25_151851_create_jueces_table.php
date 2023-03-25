<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jueces', function (Blueprint $table) {
            $table->string('id', 64)->primary();
            $table->string('Nombre', 400);
            $table->string('ApPaterno', 400);
            $table->string('APMaterno', 400);
            $table->string('Nivel', 300);
            $table->string('RFC', 400);
            $table->string('Correo', 400);
            $table->string('Telefono', 400);
            $table->string('IdZona', 64)->nullable();
            $table->string('IdEdicion', 64);
            $table->string('IdEtapa', 64);
            $table->string('IdCategoria', 64)->nullable();
            $table->tinyInteger('TieneCuenta');
            $table->tinyInteger('TipoJuez');
            
            $table->foreign('IdCategoria', 'FK_Jueces_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEdicion', 'FK_Jueces_Ediciones')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdZona', 'FK_Jueces_Zona')->references('Id')->on('zona')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jueces');
    }
}
