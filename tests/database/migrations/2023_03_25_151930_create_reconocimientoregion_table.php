<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReconocimientoregionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reconocimientoregion', function (Blueprint $table) {
            $table->integer('IdRegion')->primary();
            $table->longText('CampusSede');
            $table->string('CiudadSede', 100);
            $table->date('FechaTermino');
            $table->string('NombreDirector', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reconocimientoregion');
    }
}
