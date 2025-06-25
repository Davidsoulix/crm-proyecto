<?php

namespace App\Livewire\Proyecto;

use Livewire\Component;
use App\Models\Proyecto;

class Index extends Component
{
    public function render()
    {
        return view('livewire.proyecto.index', [
            'proyectos' => Proyecto::with('cliente')->get(),
        ]);
    }
}
