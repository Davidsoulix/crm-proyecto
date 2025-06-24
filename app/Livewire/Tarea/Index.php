<?php

namespace App\Livewire\Tarea;

use Livewire\Component;
use App\Models\Tarea;

class Index extends Component
{
    public function render()
    {
        return view('livewire.tarea.index', [
            'tareas' => Tarea::all(),
        ]);
    }
}

