<div class="max-w-7xl mx-auto p-6 lg:p-8 space-y-6">

    {{-- Bienvenida --}}
    <div class="bg-white shadow rounded p-6">
        <h2 class="text-xl font-semibold text-gray-800">Bienvenido, {{ Auth::user()->name }}</h2>
        <p class="text-gray-600 mt-2">Este es tu panel de control. Aquí puedes ver el resumen general de tu actividad.</p>
    </div>

    {{-- Resumen de estadísticas --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-4 rounded shadow text-center">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Proyectos</h3>
            <p class="text-3xl text-indigo-600 font-bold">{{ $totalProyectos }}</p>
        </div>
        <div class="bg-white p-4 rounded shadow text-center">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Publicaciones</h3>
            <p class="text-3xl text-green-600 font-bold">{{ $totalPublicaciones }}</p>
        </div>
        <div class="bg-white p-4 rounded shadow text-center">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Eventos</h3>
            <p class="text-3xl text-blue-600 font-bold">{{ $totalEventos }}</p>
        </div>
        <div class="bg-white p-4 rounded shadow text-center">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Solicitudes</h3>
            <p class="text-3xl text-red-600 font-bold">{{ $totalSolicitudes }}</p>
        </div>
    </div>

</div>
