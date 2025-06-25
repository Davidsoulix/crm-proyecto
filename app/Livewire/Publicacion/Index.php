<?php

namespace App\Livewire\Publicacion;

use Livewire\Component;
use App\Models\Publicacion;

class Index extends Component
{
    public function render()
    {
        return view('livewire.publicacion.index', [
            'publicaciones' => Publicacion::with('proyecto')->latest()->get(),
        ]);
    }
}
