<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->integer('IdPersona')->primary();
            $table->string('Nombre', 100);
            $table->string('ApellidoPaterno', 100);
            $table->string('ApellidoMaterno', 100);
            $table->string('RFC', 50)->nullable();
            $table->string('NumeroControl', 50)->nullable();
            $table->string('CURP', 200)->nullable();
            $table->string('Correo', 200)->nullable();
            $table->timestamp('FechaMod')->nullable()->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
