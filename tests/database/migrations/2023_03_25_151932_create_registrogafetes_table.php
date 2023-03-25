<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrogafetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrogafetes', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('NombreCompleto', 100);
            $table->string('IdZona', 64);
            $table->string('Correo', 100);
            $table->string('tipo', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrogafetes');
    }
}
