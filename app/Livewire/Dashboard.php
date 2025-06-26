<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Proyecto;
use App\Models\Publicacion;
use App\Models\EventoCalendario;
use App\Models\Solicitud;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard', [
            'totalProyectos' => Proyecto::count(),
            'totalPublicaciones' => Publicacion::count(),
            'totalEventos' => EventoCalendario::count(),
            'totalSolicitudes' => Solicitud::count(),
        ]);
    }
}
