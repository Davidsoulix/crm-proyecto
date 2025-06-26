<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 space-y-2">
                <!-- Reportes de Proyectos -->
                <div>
                    <h3 class="font-semibold text-lg text-gray-700 mb-2">Reportes de Proyectos</h3>
                    <a href="{{ route('reportes.proyectos.excel') }}"
                        class="text-blue-600 hover:underline mr-4">Exportar a Excel</a>
                    <a href="{{ route('reportes.proyectos.pdf') }}" class="text-red-600 hover:underline">Exportar a
                        PDF</a>
                </div>

                <!-- Reportes de Clientes -->
                <div class="mt-4">
                    <h3 class="font-semibold text-lg text-gray-700 mb-2">Reportes de Clientes</h3>
                    <a href="{{ route('reportes.clientes.excel') }}" class="text-blue-600 hover:underline mr-4">Exportar
                        a Excel</a>
                    <a href="{{ route('reportes.clientes.pdf') }}" class="text-red-600 hover:underline">Exportar a
                        PDF</a>
                </div>
            </div>

            <livewire:dashboard />
        </div>
    </div>
</x-app-layout>