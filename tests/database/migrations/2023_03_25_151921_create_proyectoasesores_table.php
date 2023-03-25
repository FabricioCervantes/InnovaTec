<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoasesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectoasesores', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdAsesor', 64);
            $table->string('IdProyecto', 64);
            
            $table->foreign('IdAsesor', 'FK_ProyectoAsesores_Asesor')->references('Id')->on('asesor')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdProyecto', 'FK_ProyectoAsesores_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectoasesores');
    }
}
