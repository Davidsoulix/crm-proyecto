<div class="bg-white shadow rounded p-4">
    <table class="w-full table-auto">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">#</th>
                <th class="px-4 py-2 text-left">Nombre</th>
                <th class="px-4 py-2 text-left">Usuario</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($herramientas as $h)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $h->id_herramienta }}</td>
                    <td class="px-4 py-2">{{ $h->nombre }}</td>
                    <td class="px-4 py-2">{{ $h->username }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-4 py-2 text-center text-gray-500">
                        No hay herramientas registradas.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

