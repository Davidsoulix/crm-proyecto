<?php

namespace App\Livewire\Proyecto;

use Livewire\Component;
use App\Models\Proyecto;
use App\Models\Cliente;
use App\Models\Actividad;
use App\Models\Estado;
use App\Models\ProyectoActividad;

class Form extends Component
{
    public $nombre, $descripcion, $fecha_inicio, $fecha_fin;
    public $id_cliente, $actividadesSeleccionadas = [];

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'fecha_inicio' => 'nullable|date',
        'fecha_fin' => 'nullable|date|after_or_equal:fecha_inicio',
        'id_cliente' => 'required|exists:clientes,id_cliente',
        'actividadesSeleccionadas' => 'required|array|min:1',
    ];

    public function guardar()
    {
        $this->validate();

        $proyecto = Proyecto::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'id_cliente' => $this->id_cliente,
            'id_estado' => 1, // estado 'pendiente'
        ]);

        foreach ($this->actividadesSeleccionadas as $id_actividad) {
            ProyectoActividad::create([
                'id_proyecto' => $proyecto->id_proyecto,
                'id_actividad' => $id_actividad,
                'id_estado' => 1, // pendiente por defecto
            ]);
        }

        session()->flash('success', 'Proyecto creado correctamente.');
        $this->reset(['nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'id_cliente', 'actividadesSeleccionadas']);
    }

    public function render()
    {
        return view('livewire.proyecto.form', [
            'clientes' => Cliente::all(),
            'actividades' => Actividad::all()
        ]);
    }
}
