<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifiacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifiaciones', function (Blueprint $table) {
            $table->string('IdNotificacion', 64)->primary();
            $table->string('Titulo', 250);
            $table->string('Mensaje', 250);
            $table->string('UrlSitio', 450);
            $table->dateTime('Fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifiaciones');
    }
}
