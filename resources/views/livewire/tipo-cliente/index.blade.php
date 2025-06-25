<div class="bg-white shadow rounded p-4">
    <table class="w-full table-auto">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">#</th>
                <th class="px-4 py-2 text-left">Nombre</th>
                <th class="px-4 py-2 text-left">Descripción</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tipos as $tipo)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $tipo->id_tipocliente }}</td>
                    <td class="px-4 py-2">{{ $tipo->nombre }}</td>
                    <td class="px-4 py-2">{{ $tipo->descripcion }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-4 py-2 text-center text-gray-500">
                        No hay tipos de cliente registrados.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
