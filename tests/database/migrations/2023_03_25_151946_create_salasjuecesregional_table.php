<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasjuecesregionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salasjuecesregional', function (Blueprint $table) {
            $table->bigInteger('Id')->primary();
            $table->string('IdJuez', 64);
            $table->bigInteger('IdSala');
            
            $table->foreign('IdJuez', 'FK_SalasJuecesRegional_Jueces')->references('id')->on('jueces')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdSala', 'FK_SalasJuecesRegional_Salas')->references('Id')->on('salas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salasjuecesregional');
    }
}
