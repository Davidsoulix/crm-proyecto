<div class="bg-white shadow rounded p-4">
    <table class="w-full table-auto">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Cliente</th>
                <th class="px-4 py-2">Tipo</th>
                <th class="px-4 py-2">Descripción</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($solicitudes as $s)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $s->id_solicitud }}</td>
                    <td class="px-4 py-2">{{ $s->cliente->nombre ?? '-' }}</td>
                    <td class="px-4 py-2">{{ $s->tipoCliente->nombre ?? '-' }}</td>
                    <td class="px-4 py-2">{{ $s->descripcion }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-gray-500 py-4">No hay solicitudes registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

