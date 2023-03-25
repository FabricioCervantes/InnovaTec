<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActualizaciondatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualizaciondatos', function (Blueprint $table) {
            $table->bigInteger('Id')->primary();
            $table->string('IdEscuela', 64);
            $table->string('Nombre', 350);
            $table->string('Cargo', 350);
            $table->string('Departamento', 350);
            $table->string('CorreoElectronico', 350);
            $table->string('TelOficina', 50);
            $table->string('TelCelular', 50);
            $table->string('CorreoElectronicoAlterno', 350);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actualizaciondatos');
    }
}
