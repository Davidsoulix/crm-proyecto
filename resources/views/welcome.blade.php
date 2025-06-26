<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ortega & Lodeiro - CRM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50">

    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">

            {{-- LOGO --}}
            <div class="mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 mx-auto">
            </div>

            {{-- TITULAR --}}
            <h1 class="text-4xl font-bold text-gray-800">Bienvenido al CRM de Ortega & Lodeiro</h1>
            <p class="mt-4 text-lg text-gray-600">
                Plataforma para la gestión de proyectos, clientes, publicaciones y eventos.
            </p>

            {{-- BOTONES --}}
            <div class="mt-8 space-x-4">
                <a href="{{ route('login') }}"
                    class="px-6 py-3 bg-indigo-600 text-white rounded-lg text-lg hover:bg-indigo-700 transition">
                    Iniciar sesión
                </a>

                <a href="{{ route('register') }}"
                    class="px-6 py-3 bg-gray-200 text-gray-800 rounded-lg text-lg hover:bg-gray-300 transition">
                    Registrarse
                </a>
            </div>

            {{-- OPCIONAL: enlaces institucionales --}}
            <div class="mt-10 text-sm text-gray-500">
                ¿Necesitas ayuda? <a href="#" class="text-indigo-600 hover:underline">Contáctanos</a>
            </div>
        </div>
    </div>

</body>
</html>

