<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJueceslocalcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jueceslocalcategoria', function (Blueprint $table) {
            $table->bigInteger('Id')->primary();
            $table->string('IdJuezLocal', 64);
            $table->string('IdCategoria', 64);
            
            $table->foreign('IdCategoria', 'FK_JuecesLocalCategoria_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdJuezLocal', 'FK_JuecesLocalCategoria_JuecesLocal')->references('Id')->on('jueceslocal')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jueceslocalcategoria');
    }
}
