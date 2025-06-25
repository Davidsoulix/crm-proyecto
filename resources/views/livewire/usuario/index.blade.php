<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-bold">Usuarios</h2>
        <a href="{{ route('usuario.create') }}" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
            + Nuevo Usuario
        </a>
    </div>

    <table class="w-full table-auto border-collapse">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Nombre</th>
                <th class="px-4 py-2 text-left">Email</th>
                <th class="px-4 py-2 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr class="border-b">
                <td class="px-4 py-2">{{ $usuario->name }}</td>
                <td class="px-4 py-2">{{ $usuario->email }}</td>
                <td class="px-4 py-2 space-x-2">
                    <a href="{{ route('usuario.proyectos', $usuario->id) }}"
                        class="text-blue-600 hover:underline text-sm">
                        Asignar Proyectos
                    </a>
                    <a href="{{ route('usuario.herramientas', $usuario->id) }}"
                        class="text-indigo-600 hover:underline text-sm">
                        Asignar Herramientas
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>