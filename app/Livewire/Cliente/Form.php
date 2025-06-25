<?php

namespace App\Livewire\Cliente;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Sector;

class Form extends Component
{
    public $nombre;
    public $empresa;
    public $email;
    public $telefono;
    public $id_sector;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'empresa' => 'required|string|max:255',
        'email' => 'required|email|unique:clientes,email',
        'telefono' => 'nullable|string|max:20',
        'id_sector' => 'required|exists:sectors,id_sector',
    ];

    public function guardar()
    {
        $this->validate();

        Cliente::create([
            'nombre' => $this->nombre,
            'empresa' => $this->empresa,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'id_sector' => $this->id_sector,
        ]);

        session()->flash('success', 'Cliente creado correctamente.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.cliente.form', [
            'sectores' => Sector::all()
        ]);
    }
}
