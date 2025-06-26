<?php

namespace App\Livewire\Solicitud;

use Livewire\Component;
use App\Models\Solicitud;
use App\Models\Cliente;
use App\Models\TipoCliente;

class Form extends Component
{
    public $id_cliente;
    public $id_tipocliente;
    public $descripcion;

    protected $rules = [
        'id_cliente' => 'required|exists:clientes,id_cliente',
        'id_tipocliente' => 'required|exists:tipo_clientes,id_tipocliente',
        'descripcion' => 'nullable|string|max:500',
    ];

    public function guardar()
    {
        $this->validate();

        Solicitud::create([
            'id_cliente' => $this->id_cliente,
            'id_tipocliente' => $this->id_tipocliente,
            'descripcion' => $this->descripcion,
        ]);

        session()->flash('success', 'Solicitud creada correctamente.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.solicitud.form', [
            'clientes' => Cliente::all(),
            'tipos' => TipoCliente::all(),
        ]);
    }
}

