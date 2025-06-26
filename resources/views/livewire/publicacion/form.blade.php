<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Crear Publicación</h2>

    @if (session()->has('success'))
        <div class="text-green-700 bg-green-100 p-2 mb-4 rounded">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="guardar">
        <div class="mb-4">
            <label class="block">Proyecto</label>
            <select wire:model="id_proyecto" class="w-full border rounded">
                <option value="">Selecciona un proyecto</option>
                @foreach ($proyectos as $proyecto)
                    <option value="{{ $proyecto->id_proyecto }}">{{ $proyecto->nombre }}</option>
                @endforeach
            </select>
            @error('id_proyecto') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block">Título</label>
            <input type="text" wire:model="titulo" class="w-full border rounded" />
            @error('titulo') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block">Contenido</label>
            <textarea wire:model="contenido" class="w-full border rounded"></textarea>
        </div>

        <div class="mb-4">
            <label class="block">Plataforma</label>
            <input type="text" wire:model="plataforma" class="w-full border rounded" />
        </div>

        <div class="mb-4">
            <label class="block">Imagen</label>
            <input type="file" wire:model="imagen" class="w-full" />
        </div>

        <div class="mb-4">
            <label class="block">Fecha de Publicación</label>
            <input type="date" wire:model="fecha_publicacion" class="w-full border rounded" />
            @error('fecha_publicacion') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Guardar Publicación
        </button>
    </form>
</div>


