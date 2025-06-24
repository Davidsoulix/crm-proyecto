<?php

namespace App\Livewire\Tarea;

use Livewire\Component;
use App\Models\Tarea;

class Form extends Component
{
    public $descripcion;
    public $modoEdicion = false;
    public $tarea;

    protected $rules = [
        'descripcion' => 'required|string|max:255',
    ];

    public function mount($tareaId = null)
    {
        if ($tareaId) {
            $this->modoEdicion = true;
            $this->tarea = Tarea::findOrFail($tareaId);
            $this->descripcion = $this->tarea->descripcion;
        }
    }

    public function guardar()
    {
        $this->validate();

        if ($this->modoEdicion) {
            $this->tarea->update([
                'descripcion' => $this->descripcion,
            ]);
        } else {
            Tarea::create([
                'descripcion' => $this->descripcion,
            ]);
        }

        session()->flash('success', $this->modoEdicion ? 'Tarea actualizada' : 'Tarea creada');
        $this->reset(['descripcion', 'modoEdicion', 'tarea']);
    }

    public function render()
    {
        return view('livewire.tarea.form');
    }
}