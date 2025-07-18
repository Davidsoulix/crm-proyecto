<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Herramientas
        </h2>
    </x-slot>

    <div class="py-6 max-w-6xl mx-auto">
        <div class="flex justify-end mb-4">
            <a href="{{ route('herramienta.create') }}"
                class="inline-block px-5 py-2 bg-green-600 text-white font-semibold rounded shadow hover:bg-green-700 transition">
                + Nueva Herramienta
            </a>
        </div>

        <livewire:herramienta.index />
    </div>
</x-app-layout>