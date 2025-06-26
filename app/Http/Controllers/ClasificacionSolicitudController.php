<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Solicitud;
use App\Models\TipoCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClasificacionSolicitudController extends Controller
{
    public function clasificarYCrear(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email',
            'empresa' => 'required|string|max:255',
            'solicitud' => 'required|string',
        ]);

        // Llamada al microservicio
        $respuesta = Http::post('http://localhost:8000/clasificar', [
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'empresa' => $request->empresa,
            'solicitud' => $request->solicitud,
        ]);

        if (!$respuesta->ok()) {
            return back()->with('error', 'Error al clasificar la solicitud.');
        }

        $tipoClienteNombre = $respuesta->json()['tipo_cliente'];

        // Obtener o crear cliente
        $cliente = Cliente::firstOrCreate(
            ['email' => $request->correo],
            [
                'nombre' => $request->nombre,
                'empresa' => $request->empresa,
                'telefono' => '', // puedes añadir un campo opcional
                'id_sector' => 1  // usar un sector por defecto o detectar uno si corresponde
            ]
        );

        // Obtener tipo cliente
        $tipoCliente = TipoCliente::where('nombre', $tipoClienteNombre)->first();

        if (!$tipoCliente) {
            return back()->with('error', 'Tipo de cliente no encontrado.');
        }

        // Crear solicitud
        Solicitud::create([
            'id_cliente' => $cliente->id_cliente,
            'id_tipocliente' => $tipoCliente->id_tipocliente,
            'descripcion' => $request->solicitud,
        ]);

        return back()->with('success', 'Solicitud clasificada y registrada correctamente.');
    }
}
