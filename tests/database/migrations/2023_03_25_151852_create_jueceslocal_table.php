<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJueceslocalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jueceslocal', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('RFC', 13);
            $table->string('Nombre', 150);
            $table->string('ApellidoP', 150);
            $table->string('ApellidoM', 150);
            $table->string('Correo', 300);
            $table->string('Telefono', 15);
            $table->string('IdEscuela', 64);
            $table->string('UltimoGrado', 100)->nullable();
            $table->string('TituloDeUltimoGrado', 150)->nullable();
            $table->string('CorreoAlterno', 300)->nullable();
            $table->string('IdEdicion', 64);
            $table->tinyInteger('TieneCuenta');
            $table->tinyInteger('Eliminado');
            $table->bigInteger('IdSalaLocal')->nullable();
            $table->string('IdElimino', 64)->nullable();
            
            $table->foreign('IdSalaLocal', 'FK_JuecesLocal_Salas')->references('Id')->on('salas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jueceslocal');
    }
}
