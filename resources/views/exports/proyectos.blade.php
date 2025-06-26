@foreach($proyectos as $proyecto)
    <h3>Proyecto: {{ $proyecto->nombre }}</h3>
    <p>Cliente: {{ $proyecto->cliente->nombre }} ({{ $proyecto->cliente->empresa }})</p>
    <p>Fechas: {{ $proyecto->fecha_inicio }} - {{ $proyecto->fecha_fin }}</p>
    <p>Estado: {{ $proyecto->estado->nombre }}</p>

    <h4>Actividades y Tareas:</h4>
    <ul>
        @foreach ($proyecto->proyectoActividades as $pa)
            <li><strong>{{ $pa->actividad->titulo }}</strong> ({{ $pa->estado->nombre }})</li>
            <ul>
                @foreach ($pa->actividad->actividadTareas as $at)
                    <li>- {{ $at->tarea->descripcion }} ({{ $at->estado->nombre }})</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
    <hr>
@endforeach
