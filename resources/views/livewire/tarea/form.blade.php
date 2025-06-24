<div class="max-w-xl mx-auto mt-5">
    <form wire:submit.prevent="guardar" class="bg-white p-6 rounded shadow">
        <h2 class="text-lg font-bold mb-4">{{ $modoEdicion ? 'Editar Tarea' : 'Nueva Tarea' }}</h2>

        @if (session()->has('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Descripción</label>
            <input type="text" wire:model.defer="descripcion" class="mt-1 block w-full rounded border-gray-300 shadow-sm" />
            @error('descripcion') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            {{ $modoEdicion ? 'Actualizar' : 'Guardar' }}
        </button>
    </form>
</div>

