<?php

namespace App\Livewire\Usuario;

use Livewire\Component;
use App\Models\User;
use App\Models\Herramienta;
use App\Models\UsuarioHerramienta;

class Herramientas extends Component
{
    public User $usuario;
    public array $herramientasSeleccionadas = [];

    public function mount(User $usuario)
    {
        $this->usuario = $usuario;

        // Cargar herramientas ya asignadas
        $this->herramientasSeleccionadas = UsuarioHerramienta::where('user_id', $usuario->id)
            ->pluck('id_herramienta')
            ->toArray();
    }

    public function guardar()
    {
        // Eliminar las asignaciones actuales
        UsuarioHerramienta::where('user_id', $this->usuario->id)->delete();

        // Insertar nuevas asignaciones
        $registros = collect($this->herramientasSeleccionadas)->map(function ($id) {
            return [
                'user_id' => $this->usuario->id,
                'id_herramienta' => $id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->toArray();

        UsuarioHerramienta::insert($registros);

        session()->flash('success', 'Herramientas asignadas correctamente.');
    }

    public function render()
    {
        return view('livewire.usuario.herramientas', [
            'herramientas' => Herramienta::all(),
        ]);
    }
}
