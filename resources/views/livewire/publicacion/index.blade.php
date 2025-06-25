<div class="bg-white p-6 rounded shadow max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Lista de Publicaciones</h2>

        <a href="{{ route('publicacion.create') }}"
           class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 text-sm">
            + Crear Publicación
        </a>
    </div>

    <table class="table-auto w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Título</th>
                <th class="px-4 py-2 text-left">Proyecto</th>
                <th class="px-4 py-2 text-left">Plataforma</th>
                <th class="px-4 py-2 text-left">Fecha</th>
                <th class="px-4 py-2 text-left">Imagen</th>
                <th class="px-4 py-2 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($publicaciones as $publicacion)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $publicacion->titulo }}</td>
                    <td class="px-4 py-2">{{ $publicacion->proyecto->nombre ?? 'Sin proyecto' }}</td>
                    <td class="px-4 py-2">{{ $publicacion->plataforma }}</td>
                    <td class="px-4 py-2">{{ $publicacion->fecha_publicacion }}</td>
                    <td class="px-4 py-2">
                        @if ($publicacion->imagen)
                            <img src="{{ asset('storage/' . $publicacion->imagen) }}" class="h-10" />
                        @endif
                    </td>
                    <td class="px-4 py-2">
                        <a href="{{ route('publicacion.show', $publicacion->id_publicacion) }}"
                           class="text-blue-600 hover:underline text-sm">
                            Ver
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center py-4">No hay publicaciones registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
