<?php

namespace App\Livewire\Sector;

use Livewire\Component;
use App\Models\Sector;

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

        Sector::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
        ]);

        session()->flash('success', 'Sector creado correctamente.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.sector.form');
    }
}
