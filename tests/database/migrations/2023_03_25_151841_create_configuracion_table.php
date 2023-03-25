<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdEdicion', 64);
            $table->string('IdEtapa', 64);
            $table->string('Valor', 50);
            $table->string('Descripcion', 50);
            
            $table->foreign('IdEdicion', 'FK_Configuracion_Ediciones')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracion');
    }
}
