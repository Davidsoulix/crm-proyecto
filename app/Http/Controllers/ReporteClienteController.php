<?php

namespace App\Http\Controllers;

use App\Exports\ClientesExport;
use App\Models\Cliente;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class ReporteClienteController extends Controller
{
    public function exportExcel()
    {
        return Excel::download(new ClientesExport, 'clientes.xlsx');
    }

    public function exportPDF()
    {
        $clientes = Cliente::with('solicitudes.tipoCliente')->get();
        $pdf = PDF::loadView('exports.clientes', compact('clientes'));
        return $pdf->download('clientes.pdf');
    }
}

