<x-global>

    <div class="container mt-5 pt-4">
        <h1>{{ $room->name }}</h1>
        <p>{{ $room->description }}</p>
        <p>Ilość łóżek: {{ $room->beds_amount }}</p>
    </div>

</x-global>
