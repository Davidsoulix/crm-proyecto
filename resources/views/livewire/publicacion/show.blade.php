<div class="bg-white p-6 rounded shadow max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold mb-4">Detalle de la Publicación</h2>

    <div class="mb-4">
        <strong>Título:</strong>
        <p>{{ $publicacion->titulo }}</p>
    </div>

    <div class="mb-4">
        <strong>Contenido:</strong>
        <p class="whitespace-pre-line">{{ $publicacion->contenido }}</p>
    </div>

    <div class="mb-4">
        <strong>Proyecto:</strong>
        <p>{{ $publicacion->proyecto->nombre ?? 'Sin proyecto' }}</p>
    </div>

    <div class="mb-4">
        <strong>Plataforma:</strong>
        <p>{{ $publicacion->plataforma }}</p>
    </div>

    <div class="mb-4">
        <strong>Fecha de publicación:</strong>
        <p>{{ $publicacion->fecha_publicacion }}</p>
    </div>

    @if ($publicacion->imagen)
        <div class="mb-4">
            <strong>Imagen:</strong><br>
            <img src="{{ asset('storage/' . $publicacion->imagen) }}" class="h-48 mt-2 rounded border">
        </div>
    @endif

    <a href="{{ route('publicacion.index') }}"
       class="inline-block bg-gray-300 hover:bg-gray-400 text-sm px-4 py-2 rounded mt-4">
        Volver al listado
    </a>
</div>
