<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemoriatecnicalocaltipocampoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memoriatecnicalocaltipocampo', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('Nombre', 50);
            $table->string('HTML', 64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memoriatecnicalocaltipocampo');
    }
}
