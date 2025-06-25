<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalle de Publicación
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto">
        <livewire:publicacion.show :publicacion="$publicacion" />
    </div>
</x-app-layout>
