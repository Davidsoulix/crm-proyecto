<?php

namespace App\Livewire\Herramienta;

use Livewire\Component;
use App\Models\Herramienta;

class Form extends Component
{
    public $nombre;
    public $descripcion;
    public $username;
    public $password;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string|max:500',
        'username' => 'required|string|max:255',
        'password' => 'required|string|max:255',
    ];

    public function guardar()
    {
        $this->validate();

        Herramienta::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'username' => $this->username,
            'password' => $this->password,
        ]);

        session()->flash('success', 'Herramienta creada correctamente.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.herramienta.form');
    }
}
