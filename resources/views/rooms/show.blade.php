<x-global>

    <div class="container mt-5 pt-4">
        <h1>{{ $room->name }}</h1>
        <p>{{ $room->description }}</p>
        <p>Ilość łóżek: {{ $room->beds_amount }}</p>
        <a href="{{route("reservations.create", $room->id)}}" class="btn btn-primary mb-2">Rezerwacja</a>
        <h2>Dostępne terminy:</h2>
        <div id="app">
            <calendar :disabled-dates="{{$disabledDates}}"></calendar>
        </div>
    </div>
</x-global>
