<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncargadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encargados', function (Blueprint $table) {
            $table->string('IdEncargado', 64)->primary();
            $table->string('Nombre', 400);
            $table->string('ApellidoPaterno', 400);
            $table->string('ApellidoMaterno', 400);
            $table->string('Correo', 400);
            $table->string('Telefono', 10);
            $table->string('RFC', 13);
            $table->string('IdZona', 64);
            $table->string('IdEdicion', 64);
            $table->tinyInteger('TieneCuenta');
            
            $table->foreign('IdEdicion', 'FK_KF_Encargados_Ediciones')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdZona', 'FK_KF_Encargados_Zona')->references('Id')->on('zona')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encargados');
    }
}
