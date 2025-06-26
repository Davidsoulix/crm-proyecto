<div class="bg-white shadow rounded p-4">
    <table class="w-full table-auto">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">#</th>
                <th class="px-4 py-2 text-left">Nombre</th>
                <th class="px-4 py-2 text-left">Empresa</th>
                <th class="px-4 py-2 text-left">Email</th>
                <th class="px-4 py-2 text-left">Sector</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($clientes as $c)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $c->id_cliente }}</td>
                    <td class="px-4 py-2">{{ $c->nombre }}</td>
                    <td class="px-4 py-2">{{ $c->empresa }}</td>
                    <td class="px-4 py-2">{{ $c->email }}</td>
                    <td class="px-4 py-2">{{ $c->sector->nombre ?? '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-2 text-center text-gray-500">No hay clientes registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

