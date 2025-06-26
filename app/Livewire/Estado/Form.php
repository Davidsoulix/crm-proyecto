<?php

namespace App\Livewire\Estado;

use Livewire\Component;
use App\Models\Estado;

class Form extends Component
{
    public $nombre;
    public $descripcion;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string|max:500',
    ];

    public function guardar()
    {
        $this->validate();

        Estado::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
        ]);

        session()->flash('success', 'Estado creado correctamente.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.estado.form');
    }
}

