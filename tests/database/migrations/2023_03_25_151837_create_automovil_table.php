<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomovilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automovil', function (Blueprint $table) {
            $table->bigInteger('Id');
            $table->string('VIN', 50)->primary();
            $table->string('Placa', 100);
            $table->integer('Tipo');
            $table->integer('Modelo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('automovil');
    }
}
