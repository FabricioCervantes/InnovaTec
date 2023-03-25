<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zona', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Zona', 250);
            $table->date('FechaInicioLocal')->nullable();
            $table->date('FechaFinLocal')->nullable();
            $table->date('FechaInicioRegional')->nullable();
            $table->date('FechaFinRegional')->nullable();
            $table->date('FechaInicioNacional')->nullable();
            $table->date('FechaFinNacional')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zona');
    }
}
