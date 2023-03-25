<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReconocimientomensajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reconocimientomensaje', function (Blueprint $table) {
            $table->string('Descpripcion', 50);
            $table->string('Dedicatoria', 1000);
            $table->tinyInteger('Activo')->nullable();
            $table->integer('Id')->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reconocimientomensaje');
    }
}
