<div class="space-y-6">
    <div class="bg-white shadow p-4 rounded">
        <h3 class="text-lg font-bold mb-2">Detalles del Proyecto</h3>
        <p><strong>Cliente:</strong> {{ $proyecto->cliente->nombre }} ({{ $proyecto->cliente->empresa }})</p>
        <p><strong>Fechas:</strong> {{ $proyecto->fecha_inicio }} - {{ $proyecto->fecha_fin }}</p>
        <p><strong>Estado:</strong> {{ $proyecto->estado->nombre }}</p>
    </div>

    <div class="bg-white shadow p-4 rounded">
        <h3 class="text-lg font-bold mb-4">Actividades y Tareas</h3>

        @foreach ($proyecto->proyectoActividades as $pa)
        <div class="border-b pb-4 mb-4">
            <h4 class="text-md font-semibold">{{ $pa->actividad->titulo }}</h4>
            <p class="text-sm text-gray-600 mb-2">Estado: {{ $pa->estado->nombre }}</p>

            <ul class="ml-4 space-y-1">
                @foreach ($pa->actividad->actividadTareas as $at)
                <li class="flex items-center justify-between">
                    <span>{{ $at->tarea->descripcion }}</span>
                    <div class="flex gap-4 items-center">
                        <label class="flex items-center text-sm text-gray-700">
                            <input type="checkbox"
                                wire:click="actualizarTareaEstado({{ $at->id }}, $event.target.checked ? 2 : 1)"
                                @checked($at->id_estado == 2)"
                            class="text-yellow-600 rounded border-gray-300 shadow-sm ml-2">
                            <span class="ml-1">En proceso</span>
                        </label>

                        <label class="flex items-center text-sm text-gray-700">
                            <input type="checkbox"
                                wire:click="actualizarTareaEstado({{ $at->id }}, $event.target.checked ? 3 : 1)"
                                @checked($at->id_estado == 3)"
                            class="text-green-600 rounded border-gray-300 shadow-sm ml-2">
                            <span class="ml-1">Completada</span>
                        </label>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
</div>