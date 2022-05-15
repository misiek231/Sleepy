<x-global>
    <div class="container mt-5 pt-5">
        <div class="row gap-1">
            <div class="card col-lg-3 col-sm-12 p-3" style="height: fit-content">
                <h3>Filtry</h3>

                <form class="row g-3 align-items-end" method="get" action="{{route("offers.index")}}">
                    <div class="col-md-6">
                        <label for="dateFrom" class="form-label">Data od</label>
                        <input type="date" class="form-control" id="dateFrom">
                    </div>
                    <div class="col-md-6">
                        <label for="dateTo" class="form-label">Data do</label>
                        <input type="date" class="form-control" id="dateTo">
                    </div>
                    <div class="col-12">
                        <label for="place" class="form-label">Miejsce</label>
                        <input type="text" class="form-control" id="place" placeholder="Kraków">
                    </div>
                    <div class="col-md-6">
                        <label for="peopleAmount" class="form-label">Ilość osób</label>
                        <input type="number" class="form-control" id="peopleAmount">
                    </div>
                    <div class="col-md-6">
                        <label for="accomodationType" class="form-label">Rodzaj zakwaterowania</label>
                        <input type="text" class="form-control" id="accomodationType" placeholder="Pensjonat">
                    </div>
                    <div class="col-md-6">
                        <label for="priceFrom" class="form-label">Cena od</label>
                        <input type="number" class="form-control" id="priceFrom">
                    </div>
                    <div class="col-md-6">
                        <label for="priceTo" class="form-label">Cena do</label>
                        <input type="number" class="form-control" id="priceTo">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Szukaj</button>
                    </div>
                </form>
            </div>
            <div class="d-flex gap-2 flex-column col-lg-8 col-sm-12 p-0">
                @foreach($offers as $offer)
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset("storage/{$offer->image}")}}" class="img-fluid h-100 p-0 m-0" alt="img">
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
