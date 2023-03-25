<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJueceslocaltipoproyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jueceslocaltipoproyecto', function (Blueprint $table) {
            $table->bigInteger('Id')->primary();
            $table->string('IdJuezLocal', 64);
            $table->string('IdTipoProyecto', 64);
            
            $table->foreign('IdTipoProyecto', 'FK_JuecesLocalTipoProyecto_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdJuezLocal', 'FK_JuecesLocalTipoProyecto_JuecesLocal')->references('Id')->on('jueceslocal')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jueceslocaltipoproyecto');
    }
}
