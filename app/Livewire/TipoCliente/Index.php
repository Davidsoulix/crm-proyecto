<?php

namespace App\Livewire\TipoCliente;

use Livewire\Component;
use App\Models\TipoCliente;

class Index extends Component
{
    public function render()
    {
        return view('livewire.tipo-cliente.index', [
            'tipos' => TipoCliente::all(),
        ]);
    }
}
