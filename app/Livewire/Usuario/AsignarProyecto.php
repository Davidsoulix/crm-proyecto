<?php

namespace App\Livewire\Usuario;

use Livewire\Component;
use App\Models\User;
use App\Models\Proyecto;

class AsignarProyecto extends Component
{
    public User $usuario;
    public $proyectosDisponibles = [];
    public $proyectosSeleccionados = [];

    public function mount($id)
    {
        $this->usuario = User::findOrFail($id);
        $this->proyectosDisponibles = Proyecto::all();
        $this->proyectosSeleccionados = $this->usuario->proyectos->pluck('id_proyecto')->toArray();
    }

    public function updatedProyectosSeleccionados()
    {
        $this->usuario->proyectos()->sync($this->proyectosSeleccionados);
        session()->flash('success', 'Proyectos actualizados correctamente.');
    }

    public function render()
    {
        return view('livewire.usuario.asignar-proyecto');
    }
}
