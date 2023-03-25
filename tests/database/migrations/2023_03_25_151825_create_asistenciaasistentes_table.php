<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciaasistentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistenciaasistentes', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->string('Name', 100);
            $table->string('LastName', 100);
            $table->string('EMail', 89)->nullable();
            $table->string('CURP', 18)->nullable();
            $table->string('RFC', 13)->nullable();
            $table->date('BirthDate')->nullable();
            $table->string('PhoneNumber', 20)->nullable();
            $table->string('ControlNumber', 20)->nullable();
            $table->dateTime('End');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistenciaasistentes');
    }
}
