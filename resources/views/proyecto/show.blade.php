<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 leading-tight">
            Proyecto
        </h2>
    </x-slot>

    <div class="py-6 max-w-6xl mx-auto">
        <livewire:proyecto.detalle :id="$id" />
    </div>
</x-app-layout>
