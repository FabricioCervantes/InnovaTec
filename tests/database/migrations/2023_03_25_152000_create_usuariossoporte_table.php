<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariossoporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuariossoporte', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Nombre', 100);
            $table->string('ApellidoP', 100);
            $table->string('ApellidoM', 100);
            $table->string('Correo', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuariossoporte');
    }
}
