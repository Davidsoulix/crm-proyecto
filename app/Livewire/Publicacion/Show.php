<?php

namespace App\Livewire\Publicacion;

use Livewire\Component;
use App\Models\Publicacion;

class Show extends Component
{
    public Publicacion $publicacion;

    public function mount(Publicacion $publicacion)
    {
        $this->publicacion = $publicacion;
    }

    public function render()
    {
        return view('livewire.publicacion.show');
    }
}
