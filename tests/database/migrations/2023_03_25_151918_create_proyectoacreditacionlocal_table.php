<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoacreditacionlocalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectoacreditacionlocal', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdEdicion', 64);
            $table->string('IdEtapa', 64);
            $table->string('IdEscuela', 64);
            $table->tinyInteger('PuedeIntentarSubir');
            $table->string('IdUsuario', 64);
            $table->dateTime('FechaCreacion');
            $table->dateTime('FechaModificacion')->nullable();
            $table->string('IdUsuarioModifico', 64)->nullable();
            $table->string('IdCategoria', 64);
            
            $table->foreign('IdEdicion', 'FK_ProyectoAcreditacionLocal_Ediciones')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEscuela', 'FK_ProyectoAcreditacionLocal_Escuelas')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectoacreditacionlocal');
    }
}
