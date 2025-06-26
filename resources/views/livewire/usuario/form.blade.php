<div class="max-w-xl mx-auto">
    <form wire:submit.prevent="guardar" class="bg-white p-6 rounded shadow">
        <h2 class="text-lg font-bold mb-4">Nuevo Usuario</h2>

        @if (session()->has('success'))
        <div class="mb-4 text-green-600 font-semibold">{{ session('success') }}</div>
        @endif

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" wire:model.defer="name" class="w-full rounded border-gray-300 shadow-sm mt-1" />
            @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Correo electrónico</label>
            <input type="email" wire:model.defer="email" class="w-full rounded border-gray-300 shadow-sm mt-1" />
            @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Contraseña</label>
            <input type="password" wire:model.defer="password" class="w-full rounded border-gray-300 shadow-sm mt-1" />
            @error('password') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Confirmar contraseña</label>
            <input type="password" wire:model.defer="password_confirmation"
                class="w-full rounded border-gray-300 shadow-sm mt-1" />
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Guardar
        </button>
    </form>
</div>