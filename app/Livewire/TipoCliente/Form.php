<?php

namespace App\Livewire\TipoCliente;

use Livewire\Component;
use App\Models\TipoCliente;

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

        TipoCliente::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
        ]);

        session()->flash('success', 'Tipo de cliente creado correctamente.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.tipo-cliente.form');
    }
}
