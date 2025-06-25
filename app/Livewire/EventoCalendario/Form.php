<?php

namespace App\Livewire\EventoCalendario;

use Livewire\Component;
use App\Models\EventoCalendario;
use App\Models\Proyecto;

class Form extends Component
{
    public $id_proyecto;
    public $titulo;
    public $descripcion;
    public $fecha_inicio;
    public $fecha_fin;

    protected $rules = [
        'id_proyecto' => 'required|exists:proyectos,id_proyecto',
        'titulo' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'fecha_inicio' => 'required|date',
        'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
    ];

    public function guardar()
    {
        $this->validate();

        EventoCalendario::create([
            'id_proyecto' => $this->id_proyecto,
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
        ]);

        session()->flash('success', 'Evento creado correctamente.');
        return redirect()->route('evento.index');
    }

    public function render()
    {
        return view('livewire.evento-calendario.form', [
            'proyectos' => \App\Models\Proyecto::all(),
        ]);
    }
}
