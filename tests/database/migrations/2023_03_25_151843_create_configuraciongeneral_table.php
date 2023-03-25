<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguraciongeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuraciongeneral', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('Nombre', 150);
            $table->longText('Dato');
            $table->string('Tipo', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuraciongeneral');
    }
}