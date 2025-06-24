<div class="bg-white shadow rounded p-4">
    <table class="w-full table-auto">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">#</th>
                <th class="px-4 py-2 text-left">Título</th>
                <th class="px-4 py-2 text-left">Tareas Asociadas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($actividades as $actividad)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $actividad->id_actividad }}</td>
                    <td class="px-4 py-2">{{ $actividad->titulo }}</td>
                    <td class="px-4 py-2">{{ $actividad->tareas_count }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-4 py-2 text-center text-gray-500">
                        No hay actividades registradas.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
