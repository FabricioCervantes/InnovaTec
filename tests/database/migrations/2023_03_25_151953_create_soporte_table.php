<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soporte', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Titulo', 250);
            $table->string('Mensaje', 3000);
            $table->string('IdUsuario', 64);
            $table->string('IdPantalla', 64)->nullable();
            $table->string('Estatus', 64);
            $table->string('IdAtengio', 64)->nullable();
            $table->dateTime('HoraReport');
            $table->dateTime('HoraAtendio')->nullable();
            $table->bigInteger('NoTicket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soporte');
    }
}
