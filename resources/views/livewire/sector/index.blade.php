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
            @forelse ($sectores as $sector)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $sector->id_sector }}</td>
                    <td class="px-4 py-2">{{ $sector->nombre }}</td>
                    <td class="px-4 py-2">{{ $sector->descripcion }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-4 py-2 text-center text-gray-500">
                        No hay sectores registrados.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
