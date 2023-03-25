<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasproyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salasproyecto', function (Blueprint $table) {
            $table->bigInteger('Id')->primary();
            $table->string('IdProyecto', 64);
            $table->bigInteger('IdSala');
            $table->integer('Lugar')->nullable();
            $table->tinyInteger('Vobo')->nullable();
            
            $table->foreign('IdProyecto', 'FK_SalasProyecto_Proyecto')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdSala', 'FK_SalasProyecto_Salas')->references('Id')->on('salas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salasproyecto');
    }
}
