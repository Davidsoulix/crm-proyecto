<div class="max-w-xl mx-auto">
    <form wire:submit.prevent="guardar" class="bg-white p-6 rounded shadow">
        <h2 class="text-lg font-bold mb-4">Crear Solicitud</h2>

        @if (session()->has('success'))
        <div class="mb-4 text-green-600 font-semibold">{{ session('success') }}</div>
        @endif

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Cliente</label>
            <select wire:model="id_cliente" class="w-full rounded border-gray-300 shadow-sm mt-1">
                <option value="">-- Selecciona un cliente --</option>
                @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id_cliente }}">
                    {{ $cliente->nombre }} ({{ $cliente->empresa }})
                </option>
                @endforeach
            </select>
            @error('id_cliente') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Tipo de Cliente</label>
            <select wire:model="id_tipocliente" class="w-full rounded border-gray-300 shadow-sm mt-1">
                <option value="">-- Selecciona un tipo --</option>
                @foreach ($tipos as $tipo)
                <option value="{{ $tipo->id_tipocliente }}">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
            @error('id_tipocliente') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea wire:model.defer="descripcion" class="w-full rounded border-gray-300 shadow-sm mt-1"></textarea>
            @error('descripcion') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Guardar
        </button>
    </form>
</div>