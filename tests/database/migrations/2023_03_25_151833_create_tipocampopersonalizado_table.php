<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipocampopersonalizadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipocampopersonalizado', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Descripcion', 50);
            $table->string('CodigoHtml', 300)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipocampopersonalizado');
    }
}
