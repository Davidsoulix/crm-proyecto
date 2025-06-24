<div class="max-w-2xl mx-auto mt-5">
    <form wire:submit.prevent="guardar" class="bg-white p-6 rounded shadow">
        <h2 class="text-lg font-bold mb-4">Nueva Actividad</h2>

        @if (session()->has('success'))
        <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" wire:model.defer="titulo" class="mt-1 block w-full rounded border-gray-300 shadow-sm" />
            @error('titulo') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea wire:model.defer="descripcion"
                class="mt-1 block w-full rounded border-gray-300 shadow-sm"></textarea>
            @error('descripcion') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <label class="block text-sm font-medium text-gray-700 mb-1">Tareas asociadas</label>

        @foreach ($tareas as $tarea)
        <div class="flex items-center mb-1">
            <input type="checkbox" wire:model="tareasSeleccionadas" value="{{ $tarea->id_tarea }}"
                class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring focus:ring-blue-200">
            <span class="ml-2 text-sm text-gray-700">{{ $tarea->descripcion }}</span>
        </div>
        @endforeach

        @error('tareasSeleccionadas') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror

        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
            Guardar Actividad
        </button>
    </form>
</div>