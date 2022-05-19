<x-global>
    <div class="container mt-5 pt-5">
        <div class="row gap-1">
            <div class="card col-lg-3 col-sm-12 p-3" style="height: fit-content">
                <h3>Filtry</h3>
                @include("components.offers-filter-form")
            </div>
            <div class="d-flex gap-2 flex-column col-lg-8 col-sm-12 p-0">
                @foreach($offers as $offer)
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{$offer->image}}" class="img-fluid h-100 p-0 m-0" alt="img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$offer->name}}</h5>
                                    <p class="card-text">{{$offer->description}}</p>
                                    <a href="{{route("offers.show", $offer->id)}}" class="btn btn-primary">Sprawdź szczegóły</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-global>
