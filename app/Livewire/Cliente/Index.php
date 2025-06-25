<?php

namespace App\Livewire\Cliente;

use Livewire\Component;
use App\Models\Cliente;

class Index extends Component
{
    public function render()
    {
        return view('livewire.cliente.index', [
            'clientes' => Cliente::with('sector')->get(),
        ]);
    }
}
