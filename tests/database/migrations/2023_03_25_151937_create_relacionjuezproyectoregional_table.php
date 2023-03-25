<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionjuezproyectoregionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacionjuezproyectoregional', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->string('IdJuez1', 64)->nullable();
            $table->string('IdJuez2', 64)->nullable();
            $table->string('IdJuez3', 64)->nullable();
            $table->string('IdProyecto', 64);
            $table->dateTime('FechaRelacion');
            $table->decimal('Calificacion1', 4, 2)->nullable();
            $table->decimal('Calificacion2', 4, 2)->nullable();
            $table->decimal('Calificacion3', 4, 2)->nullable();
            $table->string('IdEdicion', 64);
            $table->string('IdZona', 64);
            $table->string('IdSectorEstrategico', 64);
            $table->string('IdCategoria', 64);
            
            $table->foreign('IdSectorEstrategico', 'FK_RelacionJuezProyectoRegional_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdCategoria', 'FK_RelacionJuezProyectoRegional_CatalogoGenerales3')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEdicion', 'FK_RelacionJuezProyectoRegional_Ediciones')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdJuez1', 'FK_RelacionJuezProyectoRegional_JuecesRegional')->references('Id')->on('juecesregional')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdJuez2', 'FK_RelacionJuezProyectoRegional_JuecesRegional1')->references('Id')->on('juecesregional')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdJuez3', 'FK_RelacionJuezProyectoRegional_JuecesRegional2')->references('Id')->on('juecesregional')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdProyecto', 'FK_RelacionJuezProyectoRegional_Proyecto1')->references('Id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdZona', 'FK_RelacionJuezProyectoRegional_Zona')->references('Id')->on('zona')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacionjuezproyectoregional');
    }
}
