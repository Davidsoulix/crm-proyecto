<?php

namespace App\Livewire\Actividad;

use Livewire\Component;
use App\Models\Actividad;

class Index extends Component
{
    public function render()
    {
        return view('livewire.actividad.index', [
            'actividades' => Actividad::withCount('tareas')->get(),
        ]);
    }
}
