<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Tareas
        </h2>
    </x-slot>

    <div class="py-6 max-w-6xl mx-auto">
        <livewire:tarea.index />

        <div class="mt-4">
            <a href="{{ route('tareas.create') }}"
                class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Crear nueva tarea
            </a>
        </div>
    </div>
</x-app-layout>
