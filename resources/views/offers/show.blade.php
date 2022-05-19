<x-global>
    <div class="container mt-5 pt-3">
        <div class="d-flex col-12 justify-content-center">
            <img src="{{$offer->image}}}" class="img-fluid" style="max-height: 600px; margin: auto 0">
        </div>
        <div class="d-flex flex-row mt-5 align-items-center gap-3">
            <h1>{{$offer->name}}</h1>
            <a href="{{route("offers.edit", $offer->id)}}" class="bi bi-pencil-square" style="font-size: 20px"></a>
        </div>
        <p> {{$offer->description}} </p>
        <div class="d-flex flex-row align-items-center gap-3 mt-5">
            <h2>Dostępne pokoje</h2>
            <a href="{{route("offers.edit", $offer->id)}}" class="bi bi-plus-square-fill" style="font-size: 20px"></a>
        </div>
        <div class="row mt-1">
            @foreach ($offer->rooms as $room)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{$room->name}}</h5>
                            <p class="card-text">{{$room->description}}</p>
                            <p class="card-text">Cena: {{$room->price}}zł/doba</p>
                            <a href="{{route('rooms.show', $room->id)}}" class="btn btn-info">Zobacz</a>
                            <a href="{{route('rooms.edit', $room->id)}}" class="btn btn-primary">Edytuj</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-room-modal-{{$room->id}}">
                                Usuń
                            </button>

                            <form method="POST" action="{{route('rooms.destroy', $room->id)}}">
                                @csrf
                                @method("DELETE")
                                @include('components.form-modal',
                                         ['id' => "delete-room-modal-$room->id",
                                         'title' => 'Uwaga!',
                                         'body' => "Czy na pewno chcesz usunąć pokój: $room->name. Zmiany są nie odwracalne",
                                         'type' => 'danger',
                                         'button' => 'Usuń'])
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-global>
