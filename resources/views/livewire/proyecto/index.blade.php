<div class="bg-white shadow rounded p-4">
    <table class="w-full table-auto">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">#</th>
                <th class="px-4 py-2 text-left">Nombre</th>
                <th class="px-4 py-2 text-left">Cliente</th>
                <th class="px-4 py-2 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($proyectos as $proyecto)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $proyecto->id_proyecto }}</td>
                <td class="px-4 py-2">{{ $proyecto->nombre }}</td>
                <td class="px-4 py-2">{{ $proyecto->cliente->nombre ?? '-' }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('proyecto.show', $proyecto->id_proyecto) }}"
                        class="text-blue-600 hover:underline">Ver</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center text-gray-500 py-4">No hay proyectos registrados.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>