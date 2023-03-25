<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {
            $table->string('Id', 64)->primary();
            $table->bigInteger('Folio');
            $table->string('NombreCorto', 30)->nullable();
            $table->tinyInteger('VoBoAlumno');
            $table->tinyInteger('VoBoAsesor');
            $table->tinyInteger('VoBoEscuela');
            $table->tinyInteger('PasaEnitLocal');
            $table->integer('Lugar')->nullable();
            $table->tinyInteger('PasaEnitRegional');
            $table->string('LugarRe', 64)->nullable();
            $table->tinyInteger('PasaEnitNacional');
            $table->string('LugarNac', 64)->nullable();
            $table->string('NombreDescriptivo', 1000)->nullable();
            $table->string('IdSectorEstrategico', 64)->nullable();
            $table->string('IdCategoria', 64)->nullable();
            $table->string('IdNaturalezaTecnica', 64)->nullable();
            $table->string('Objetivo', 1000)->nullable();
            $table->string('IdEscuela', 64);
            $table->string('IdEdicion', 64);
            $table->string('DescripcionProblematica', 1000)->nullable();
            $table->string('ResultadosAlcanzar', 1000)->nullable();
            $table->string('RequerimentosEspeciales', 1000)->nullable();
            $table->tinyInteger('ChkReq1');
            $table->tinyInteger('ChkReq2');
            $table->tinyInteger('ChkReq3');
            $table->tinyInteger('ChkReq4');
            $table->tinyInteger('ChkReq5');
            $table->string('ResultadoRegional', 1)->nullable();
            $table->string('ResultadoNacional', 1)->nullable();
            $table->tinyInteger('Eliminado');
            $table->string('IdElimino', 64)->nullable();
            $table->decimal('CalificacionLocal', 18, 2)->nullable();
            $table->tinyInteger('VoBoRegionalAlumno')->nullable();
            $table->tinyInteger('VoBoRegionalAsesor')->nullable();
            $table->tinyInteger('VoBoRegionalJefeVinculacion')->nullable();
            $table->bigInteger('IdSalaLocal')->nullable();
            $table->string('TipoProyecto', 64)->nullable();
            $table->string('SalaDireccion', 64)->nullable();
            $table->string('FechaEvaluacion', 40)->nullable();
            $table->bigInteger('IdSalaRegional')->nullable();
            $table->bigInteger('IdSalaNacional')->nullable();
            $table->boolean('AsisteRegional')->default(0);
            $table->boolean('AsisteNacional')->default(0);
            $table->tinyInteger('VoBoAlumnoNacional')->nullable();
            $table->tinyInteger('VoBoAsesorNacional')->nullable();
            $table->tinyInteger('VoBoEscuelaNacional')->nullable();
            
            $table->foreign('IdCategoria', 'FK_Proyecto_CatalogoGenerales')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdSectorEstrategico', 'FK_Proyecto_CatalogoGenerales1')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdNaturalezaTecnica', 'FK_Proyecto_CatalogoGenerales2')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEdicion', 'FK_Proyecto_Ediciones')->references('IdEdicion')->on('ediciones')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdEscuela', 'FK_Proyecto_Escuela')->references('IdEscuela')->on('escuelas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('IdSalaLocal', 'FK_Proyecto_SalasLocal')->references('Id')->on('salas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('TipoProyecto', 'FK_Proyecto_TipoProyecto')->references('Id')->on('catalogogenerales')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto');
    }
}
