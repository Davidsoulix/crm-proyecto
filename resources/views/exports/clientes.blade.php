@foreach($clientes as $cliente)
    <h3>Cliente: {{ $cliente->nombre }} ({{ $cliente->empresa }})</h3>
    <p>Email: {{ $cliente->email }}</p>
    <p>Teléfono: {{ $cliente->telefono }}</p>

    <h4>Solicitudes:</h4>
    @if($cliente->solicitudes->isEmpty())
        <p>No tiene solicitudes registradas.</p>
    @else
        <ul>
            @foreach($cliente->solicitudes as $solicitud)
                <li>
                    <p><strong>Descripción:</strong> {{ $solicitud->descripcion }}</p>
                    <p><strong>Tipo de Cliente:</strong> {{ $solicitud->tipoCliente->nombre ?? 'Sin tipo' }}</p>
                    <hr>
                </li>
            @endforeach
        </ul>
    @endif
    <hr>
@endforeach
