<?php

namespace App\Http\Controllers;

use App\Exports\ProyectosExport;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class ReporteProyectoController extends Controller
{
    public function exportExcel()
    {
        return Excel::download(new ProyectosExport, 'proyectos.xlsx');
    }

    public function exportPDF()
    {
        $proyectos = \App\Models\Proyecto::with([
            'cliente', 'estado',
            'proyectoActividades.actividad.actividadTareas.tarea',
            'proyectoActividades.estado'
        ])->get();

        $pdf = PDF::loadView('exports.proyectos', compact('proyectos'));
        return $pdf->download('proyectos.pdf');
    }
}

