<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemoriatecnicalocalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memoriatecnicalocal', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdCategoria', 64);
            $table->string('IdEdicion', 64);
            $table->string('idEtapa', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memoriatecnicalocal');
    }
}
