<div class="max-w-4xl mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Lista de Tareas</h2>
        <a href="{{ route('tareas.create') }}" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-blue-700">
            Crear nueva
        </a>
    </div>

    <table class="w-full table-auto bg-white rounded shadow">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">#</th>
                <th class="px-4 py-2 text-left">Descripción</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tareas as $tarea)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $tarea->id_tarea }}</td>
                <td class="px-4 py-2">{{ $tarea->descripcion }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="2" class="px-4 py-2 text-center text-gray-500">No hay tareas registradas.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>