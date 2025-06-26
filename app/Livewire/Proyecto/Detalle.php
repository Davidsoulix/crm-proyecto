<?php

namespace App\Livewire\Proyecto;

use Livewire\Component;
use App\Models\Proyecto;
use App\Models\ActividadTarea;
use App\Models\ProyectoActividad;

class Detalle extends Component
{
    public Proyecto $proyecto;

    public function mount($id)
    {
        $this->proyecto = Proyecto::with([
            'cliente',
            'estado',
            'proyectoActividades.actividad.actividadTareas.tarea',
            'proyectoActividades.actividad.actividadTareas.estado',
            'proyectoActividades.estado',
        ])->findOrFail($id);
    }

    public function actualizarTareaEstado($actividadTareaId, $estado)
    {
        $actividadTarea = ActividadTarea::find($actividadTareaId);
        if (!$actividadTarea) return;

        // aplicar el nuevo estado directamente
        $actividadTarea->id_estado = $estado;
        $actividadTarea->save();

        $this->actualizarEstadoActividad($actividadTarea->id_actividad);
        $this->actualizarEstadoProyecto();
        $this->mount($this->proyecto->id_proyecto); // refrescar todo
    }

    private function actualizarEstadoActividad($idActividad)
    {
        $tareas = ActividadTarea::where('id_actividad', $idActividad)->get();

        $estadoFinal = 1; // pendiente por defecto

        if ($tareas->every(fn($t) => $t->id_estado == 3)) {
            $estadoFinal = 3; // completado
        } elseif ($tareas->contains(fn($t) => $t->id_estado == 2 || $t->id_estado == 3)) {
            $estadoFinal = 2; // en proceso
        }

        ProyectoActividad::where('id_actividad', $idActividad)
            ->where('id_proyecto', $this->proyecto->id_proyecto)
            ->update(['id_estado' => $estadoFinal]);
    }

    private function actualizarEstadoProyecto()
    {
        $actividades = ProyectoActividad::where('id_proyecto', $this->proyecto->id_proyecto)->get();

        $estadoFinal = 1;

        if ($actividades->every(fn($a) => $a->id_estado == 3)) {
            $estadoFinal = 3;
        } elseif ($actividades->contains(fn($a) => $a->id_estado == 2 || $a->id_estado == 3)) {
            $estadoFinal = 2;
        }

        $this->proyecto->update(['id_estado' => $estadoFinal]);
    }

    public function render()
    {
        return view('livewire.proyecto.detalle');
    }
}
