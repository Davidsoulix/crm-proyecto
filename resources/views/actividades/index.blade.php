<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Actividades
        </h2>
    </x-slot>

    <div class="py-6 max-w-6xl mx-auto">

        {{-- Botón visible y destacado --}}
        <div class="flex justify-end mb-4">
            <a href="{{ route('actividades.create') }}"
                class="inline-block px-5 py-2 bg-green-600 text-white font-semibold rounded shadow hover:bg-green-700 transition">
                + Nueva Actividad
            </a>
        </div>

        {{-- Componente Livewire --}}
        <livewire:actividad.index />
    </div>
</x-app-layout>