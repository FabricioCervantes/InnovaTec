<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternalFkDefinitionStorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_fk_definition_storage', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->string('FK_Name', 250);
            $table->longText('FK_CreationStatement');
            $table->longText('FK_DestructionStatement');
            $table->longText('Table_TruncationStatement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internal_fk_definition_storage');
    }
}
