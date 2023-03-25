<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentacionproyectovaloresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentacionproyectovalores', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdProyecto', 64);
            $table->string('IdDocumentacionProyecto', 64);
            $table->string('Valor', 4000)->nullable();
            
            $table->foreign('IdDocumentacionProyecto', 'FK_DocumentacionProyectoValores_DocumentacionProyecto')->references('Id')->on('documentacionproyecto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentacionproyectovalores');
    }
}
