<?php

namespace App\Livewire\Usuario;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    public function render()
    {
        return view('livewire.usuario.index', [
            'usuarios' => User::all(),
        ]);
    }
}
