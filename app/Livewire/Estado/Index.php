<?php

namespace App\Livewire\Estado;

use Livewire\Component;
use App\Models\Estado;

class Index extends Component
{
    public function render()
    {
        return view('livewire.estado.index', [
            'estados' => Estado::all(),
        ]);
    }
}
