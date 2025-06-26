<div class="bg-white p-6 rounded shadow max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-4">Herramientas para {{ $usuario->name }}</h2>

    @if (session()->has('success'))
        <div class="mb-4 p-2 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="guardar" class="space-y-4">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($herramientas as $herramienta)
                <label class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        value="{{ $herramienta->id_herramienta }}"
                        wire:model="herramientasSeleccionadas"
                        class="text-blue-600 border-gray-300 rounded"
                    >
                    <span>{{ $herramienta->nombre }}</span>
                </label>
            @endforeach
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('usuario.index') }}" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">
                Volver
            </a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Guardar cambios
            </button>
        </div>
    </form>
</div>
