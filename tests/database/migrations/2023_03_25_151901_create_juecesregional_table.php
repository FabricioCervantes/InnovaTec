<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuecesregionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juecesregional', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('RFC', 13);
            $table->string('NombreCompleto', 150);
            $table->string('Correo', 300);
            $table->string('Telefono', 15);
            $table->string('IdEscuela', 64);
            $table->string('UltimoGrado', 100);
            $table->string('TituloDeUltimoGrado', 150);
            $table->string('CorreoAlterno', 300);
            $table->string('IdZona', 64);
            $table->string('IdEdicion', 64);
            $table->string('IdNaturaleza1', 64);
            $table->string('IdNaturaleza2', 64)->nullable();
            $table->string('IdNaturaleza3', 64)->nullable();
            $table->string('IdSector1', 64);
            $table->string('IdSector2', 64)->nullable();
            $table->string('IdSector3', 64)->nullable();
            $table->string('IdCategoria1', 64);
            $table->string('IdCategoria2', 64)->nullable();
            $table->string('IdCategoria3', 64)->nullable();
            $table->bigInteger('Numero');
            
            $table->foreign('IdEdicion', 'FK_JuecesRegional_Ediciones')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEscuela', 'FK_JuecesRegional_Escuelas')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdZona', 'FK_JuecesRegional_Zona')->references('Id')->on('zona')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juecesregional');
    }
}
