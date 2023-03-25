<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proyecto;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Proyectos extends Component
{
    use WithPagination;
    public $NombreCorto, $DescripciónProblematica, $Objetivo, $ResultadosAlcanzar, $Nombre, $Calificacion, $comentario, $asesor;
    public $Usuario;
    public $search;
    public $cant = 10;

    public $modal = false;

    public function render()
    {
        $proyectos = Proyecto::join('Escuelas', 'Proyecto.IdEscuela', '=', 'Escuelas.IdEscuela')
            ->leftjoin('ProyectoCalificacionesDetalle', 'Proyecto.Id', '=', 'ProyectoCalificacionesDetalle.IdProyecto')
            ->where('NombreCorto', 'like', '%' . $this->search . '%')
            ->orWhere('NombreDescriptivo', 'like', '%' . $this->search . '%')
            ->orWhere('Nombre', 'like', '%' . $this->search . '%')
            ->whereNotNull('NombreCorto')
            ->orderBy('NombreCorto')
            ->select('Proyecto.NombreCorto', 'Proyecto.Id', 'Proyecto.NombreDescriptivo', 'Escuelas.Nombre', 'ProyectoCalificacionesDetalle.Calificacion')
            ->paginate($this->cant);



        return view('livewire.proyectos', compact('proyectos'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function mostrar($id)
    {
        $proyecto1 = collect(
            Proyecto::join('Escuelas', 'Proyecto.IdEscuela', '=', 'Escuelas.IdEscuela')
                ->leftjoin('ProyectoCalificacionesDetalle', 'Proyecto.Id', '=', 'ProyectoCalificacionesDetalle.IdProyecto')
                ->leftjoin('ProyectoAlumnos', 'Proyecto.Id', '=', 'ProyectoAlumnos.IdProyecto')
                ->leftjoin('Alumno', 'ProyectoAlumnos.IdAlumno', '=', 'Alumno.Id')
                ->leftJoin('EvaluacionProyectosRetroalimentacion', 'Proyecto.Id', '=', 'EvaluacionProyectosRetroalimentacion.IdProyecto')
                ->join('ProyectoAsesores', 'Proyecto.Id', '=', 'ProyectoAsesores.IdProyecto')
                ->join('Asesor', 'ProyectoAsesores.IdAsesor', '=', 'Asesor.Id')
                ->where('Proyecto.Id', $id)
                ->select('Proyecto.NombreCorto', 'Proyecto.DescripcionProblematica', 'Proyecto.Objetivo', 'Proyecto.ResultadosAlcanzar', 'Escuelas.Nombre', 'ProyectoCalificacionesDetalle.Calificacion', 'Alumno.Nombre as alumnoNombre', 'Alumno.ApellidoPaterno', 'Alumno.ApellidoMaterno', 'EvaluacionProyectosRetroalimentacion.Comentario', 'Asesor.Nombre as asesorNombre', 'Asesor.ApellidoPaterno as asesorPaterno', 'Asesor.ApellidoMaterno as asesorMaterno')
                ->get()
        );

        $proyecto = $proyecto1->unique('ApellidoPaterno');
        $proyecto->values()->all();

        $this->NombreCorto = $proyecto[0]->NombreCorto;
        $this->Nombre = $proyecto[0]->Nombre;
        $this->DescripciónProblematica = $proyecto[0]->DescripcionProblematica;
        $this->Objetivo = $proyecto[0]->Objetivo;
        $this->ResultadosAlcanzar = $proyecto[0]->ResultadosAlcanzar;
        $this->Calificacion = $proyecto[0]->Calificacion;
        $this->comentario = $proyecto[0]->Comentario;
        // $this->asesor = $proyecto[0]->asesorNombre +  $proyecto[0]->asesorNombre +  $proyecto[0]->asesorNombre;

        if (!empty($this->Usuario)) {
            $this->Usuario = array();
        }
        if (empty($this->Calificacion) or empty($this->DescripciónProblematica) or empty($this->Objetivo) or empty($this->ResultadosAlcanzar or empty($this->comentario))) {
            $this->Calificacion = "No disponible";
            $this->DescripciónProblematica = "No disponible";
            $this->Objetivo = "No disponible";
            $this->ResultadosAlcanzar = "No disponible";
            $this->comentario = "No disponible";
        }


        foreach ($proyecto as $proy) {
            $this->Usuario[] = "$proy->alumnoNombre $proy->ApellidoPaterno $proy->ApellidoMaterno";
        }


        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }
}