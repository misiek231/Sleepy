<x-global>



    <div class="img-text-container">
        <img src="{{ asset('img/banner.jpg') }}" alt="banner">
        <p class="centered-img-text">Znajdź swoje miejsce</p>
    </div>

    <div class="container d-flex justify-content-center flex-column">
        <div>
            <h1 class="text-center p-5">Wyszukaj swoje wymarzone miejsce na nocleg</h1>
        </div>

        <form class="row g-3" method="get" action="{{route("search")}}">
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
            <div class="col-6">
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
</x-global>
