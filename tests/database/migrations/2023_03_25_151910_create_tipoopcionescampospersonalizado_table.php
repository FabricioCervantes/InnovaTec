<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoopcionescampospersonalizadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoopcionescampospersonalizado', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Descripcion', 150);
            $table->string('CodigoHtml', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoopcionescampospersonalizado');
    }
}
