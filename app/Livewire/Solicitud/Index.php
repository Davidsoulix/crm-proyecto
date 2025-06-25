<?php

namespace App\Livewire\Solicitud;

use Livewire\Component;
use App\Models\Solicitud;

class Index extends Component
{
    public function render()
    {
        return view('livewire.solicitud.index', [
            'solicitudes' => Solicitud::with(['cliente', 'tipoCliente'])->get(),
        ]);
    }
}
