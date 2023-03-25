<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectocomprobanteacreditacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectocomprobanteacreditacion', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->longText('Ruta');
            $table->string('IdEscuuela', 64);
            $table->string('IdEtapa', 64);
            $table->string('IdEdicion', 64);
            $table->boolean('EsHackatec')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectocomprobanteacreditacion');
    }
}
