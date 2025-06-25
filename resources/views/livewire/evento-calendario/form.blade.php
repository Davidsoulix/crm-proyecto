<div class="bg-white p-6 rounded shadow max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold mb-4">Crear Evento</h2>

    @if (session()->has('success'))
        <div class="mb-4 p-2 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="guardar">
        <div class="mb-4">
            <label class="block text-sm">Proyecto</label>
            <select wire:model="id_proyecto" class="w-full border-gray-300 rounded shadow-sm">
                <option value="">Seleccione...</option>
                @foreach($proyectos as $proyecto)
                    <option value="{{ $proyecto->id_proyecto }}">{{ $proyecto->nombre }}</option>
                @endforeach
            </select>
            @error('id_proyecto') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm">Título</label>
            <input type="text" wire:model="titulo" class="w-full rounded border-gray-300 shadow-sm" />
            @error('titulo') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm">Descripción</label>
            <textarea wire:model="descripcion" class="w-full rounded border-gray-300 shadow-sm"></textarea>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block text-sm">Fecha Inicio</label>
                <input type="datetime-local" wire:model="fecha_inicio" class="w-full rounded border-gray-300 shadow-sm" />
                @error('fecha_inicio') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="block text-sm">Fecha Fin</label>
                <input type="datetime-local" wire:model="fecha_fin" class="w-full rounded border-gray-300 shadow-sm" />
                @error('fecha_fin') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar Evento</button>
        </div>
    </form>
</div>
