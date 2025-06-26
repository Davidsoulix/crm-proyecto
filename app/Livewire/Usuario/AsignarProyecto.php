<?php

namespace App\Livewire\Usuario;

use Livewire\Component;
use App\Models\User;
use App\Models\Proyecto;
use App\Models\ProyectoUsuario;

class AsignarProyecto extends Component
{
    public User $usuario;
    public array $proyectosSeleccionados = [];

public function mount(User $usuario)
{
    $this->usuario = $usuario;
    $this->proyectosSeleccionados = \App\Models\ProyectoUsuario::where('user_id', $usuario->id)
        ->pluck('id_proyecto')
        ->toArray();
}

    public function guardar()
    {
        ProyectoUsuario::where('user_id', $this->usuario->id)->delete();

        $registros = collect($this->proyectosSeleccionados)->map(function ($id) {
            return [
                'user_id' => $this->usuario->id,
                'id_proyecto' => $id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->toArray();

        ProyectoUsuario::insert($registros);

        session()->flash('success', 'Proyectos actualizados correctamente.');
    }

public function render()
{
    return view('livewire.usuario.asignar-proyecto', [
        'proyectos' => \App\Models\Proyecto::all(),
    ]);
}

}
