<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionusuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacionusuario', function (Blueprint $table) {
            $table->string('IdNotificacionUsuario', 64)->primary();
            $table->string('IdUsuario', 64);
            $table->string('IdNotificacion', 64)->nullable();
            $table->dateTime('FechaVisto');
            $table->tinyInteger('Visto');
            
            $table->foreign('IdNotificacion', 'FK_NotificacionUsuario_Notifiaciones')->references('IdNotificacion')->on('notifiaciones')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificacionusuario');
    }
}
