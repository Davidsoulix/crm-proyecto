<?php

namespace App\Exports;

use App\Models\Proyecto;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ProyectosExport implements FromView
{
    public function view(): View
    {
        return view('exports.proyectos', [
            'proyectos' => Proyecto::with(['cliente', 'estado', 'proyectoActividades.actividad.actividadTareas.tarea', 'proyectoActividades.estado'])->get()
        ]);
    }
}
