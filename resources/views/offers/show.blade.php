<x-global>
    <div class="container mt-5 pt-3">
        <img src="{{asset("storage/{$offer->image}")}}" class="img-fluid w-100">
        <h1 class="mt-5"> {{$offer->name}} </h1>
        <p> {{$offer->description}} </p>
        <a href="{{route("offers.edit", $offer->id)}}" class="btn btn-primary col-2">Edytuj ofertę</a>

        <div class="row">
            <h2 class="col-3">Dostępne pokoje</h2>
            <a href="{{route("rooms.create", $offer->id)}}" class="btn btn-primary col-2">Dodaj pokój</a>
        </div>
        <div class="row">
            @foreach ($offer->rooms as $room)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{$room->name}}</h5>
                            <p class="card-text">{{$room->description}}</p>
                            <p class="card-text">Cena: {{$room->price}}zł/doba</p>
                            <a href="{{route('rooms.show', $room->id)}}" class="btn btn-primary">Zobacz</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-global>
