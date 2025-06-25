<?php

namespace App\Livewire\Herramienta;

use Livewire\Component;
use App\Models\Herramienta;

class Index extends Component
{
    public function render()
    {
        return view('livewire.herramienta.index', [
            'herramientas' => Herramienta::all(),
        ]);
    }
}
