<?php

namespace App\Livewire\EventoCalendario;

use Livewire\Component;
use App\Models\EventoCalendario;
use App\Models\Proyecto;

class Index extends Component
{
    public $titulo, $descripcion, $fecha_inicio, $fecha_fin, $id_proyecto;
    public $mostrarFormulario = false;

    public function guardar()
    {
        $this->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'id_proyecto' => 'required|exists:proyectos,id_proyecto',
        ]);

        EventoCalendario::create([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'id_proyecto' => $this->id_proyecto,
        ]);

        $this->reset(['titulo', 'descripcion', 'fecha_inicio', 'fecha_fin', 'id_proyecto', 'mostrarFormulario']);
        session()->flash('success', 'Evento creado correctamente.');
    }

    public function render()
    {
        $eventos = EventoCalendario::with('proyecto')->get()->map(function ($evento) {
            return [
                'title' => $evento->titulo,
                'start' => $evento->fecha_inicio,
                'end' => $evento->fecha_fin,
                'extendedProps' => [
                    'descripcion' => $evento->descripcion,
                    'proyecto' => $evento->proyecto->nombre ?? 'Sin proyecto',
                ],
            ];
        });

        return view('livewire.evento-calendario.index', [
            'eventos' => $eventos,
            'proyectos' => Proyecto::all()
        ]);
    }
}
