<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Tareas
        </h2>
    </x-slot>

    <div class="py-6 max-w-6xl mx-auto">
        <livewire:tarea.index />
    </div>
</x-app-layout>
