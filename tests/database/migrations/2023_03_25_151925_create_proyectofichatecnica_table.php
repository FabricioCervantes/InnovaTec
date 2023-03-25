<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectofichatecnicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectofichatecnica', function (Blueprint $table) {
            $table->string('IdProyecto', 64);
            $table->string('Id', 64)->primary();
            $table->string('FichaTecnica', 1000)->nullable();
            $table->string('DescripcionInnovacion', 1000)->nullable();
            $table->string('Beneficios', 1000)->nullable();
            $table->string('MercadoPotencial', 1000)->nullable();
            $table->string('MercadoMeta', 1000)->nullable();
            $table->string('Competencias', 1000)->nullable();
            
            $table->foreign('IdProyecto', 'FK_ProyectoFichaTecnica_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectofichatecnica');
    }
}
