<?php

namespace App\Livewire\Sector;

use Livewire\Component;
use App\Models\Sector;

class Index extends Component
{
    public function render()
    {
        return view('livewire.sector.index', [
            'sectores' => Sector::all(),
        ]);
    }
}
