<?php

namespace App\Livewire\Publicacion;

use Livewire\Component;
use App\Models\Publicacion;
use App\Models\Proyecto;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $id_proyecto, $titulo, $contenido, $plataforma, $imagen, $fecha_publicacion;

    protected $rules = [
        'id_proyecto' => 'required|exists:proyectos,id_proyecto',
        'titulo' => 'required|string|max:255',
        'contenido' => 'nullable|string',
        'plataforma' => 'nullable|string|max:100',
        'imagen' => 'nullable|image|max:2048',
        'fecha_publicacion' => 'required|date',
    ];

    public function guardar()
    {
        $this->validate();

        $ruta = $this->imagen ? $this->imagen->store('publicaciones', 'public') : null;

        Publicacion::create([
            'id_proyecto' => $this->id_proyecto,
            'titulo' => $this->titulo,
            'contenido' => $this->contenido,
            'plataforma' => $this->plataforma,
            'imagen' => $ruta,
            'fecha_publicacion' => $this->fecha_publicacion,
        ]);

        session()->flash('success', 'Publicación creada correctamente.');
        $this->reset(['titulo', 'contenido', 'plataforma', 'imagen', 'fecha_publicacion']);
    }

    public function render()
    {
        return view('livewire.publicacion.form', [
            'proyectos' => Proyecto::all()
        ]);
    }
}