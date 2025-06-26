<div class="max-w-6xl mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Calendario de Eventos</h2>
        <div class="flex justify-end mb-4">
            <a href="{{ route('evento.create') }}"
                class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 text-sm">
                + Crear Evento
            </a>
        </div>
    </div>

    @if (session()->has('success'))
    <div class="mb-4 p-2 bg-green-100 text-green-800 rounded">
        {{ session('success') }}
    </div>
    @endif

    {{-- Calendario --}}
    <div wire:ignore>
        <div id="calendar" class="bg-white p-4 rounded shadow"></div>
    </div>

</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendarEl = document.getElementById('calendar');

        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: 600,
            locale: 'es',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek'
            },
            events: @json($eventos),
            eventClick: function(info) {
                const detalle = `${info.event.title}\n${info.event.extendedProps.proyecto}\n${info.event.extendedProps.descripcion}`;
                alert(detalle);
            }
        });

        calendar.render();
    });
</script>
@endpush