<div class="card">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{$offer->image}}" class="img-fluid h-100 p-0 m-0" alt="img">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$offer->name}}</h5>
                <p class="card-text">{{$offer->description}}</p>
                <a href="{{route("offers.show", $offer->id)}}" class="btn btn-info">Sprawdź szczegóły</a>
                <a href="{{route("offers.edit", $offer->id)}}" class="btn btn-primary">Edytuj</a>
            </div>
        </div>
    </div>
</div>
