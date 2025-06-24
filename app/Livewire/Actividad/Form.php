<?php

namespace App\Livewire\Actividad;

use Livewire\Component;
use App\Models\Actividad;
use App\Models\Tarea;
use App\Models\ActividadTarea;

class Form extends Component
{
    public $titulo;
    public $descripcion;
    public $tareasSeleccionadas = [];

    public function guardar()
    {
        $this->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'tareasSeleccionadas' => 'required|array|min:1',
        ]);

        $actividad = Actividad::create([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
        ]);

        foreach ($this->tareasSeleccionadas as $tareaId) {
            ActividadTarea::create([
                'id_actividad' => $actividad->id_actividad,
                'id_tarea' => $tareaId,
                'id_estado' => 1, // estado 'pendiente' por defecto
            ]);
        }

        session()->flash('success', 'Actividad creada correctamente');
        $this->reset(['titulo', 'descripcion', 'tareasSeleccionadas']);
    }

    public function render()
    {
        return view('livewire.actividad.form', [
            'tareas' => Tarea::all()
        ]);
    }
}
