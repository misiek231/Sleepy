<x-global>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sleepy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Start</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Szukaj noclegu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Moje rezerwacje</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dodaj ofertę</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">O nas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="img-text-container">
        <img src="{{ asset('img/banner.jpg') }}" alt="banner">
        <p class="centered-img-text">Znajdź swoje miejsce</p>
    </div>

    <div class="container d-flex justify-content-center flex-column">
        <div>
            <h1 class="text-center p-5">Wyszukaj swoje wymarzone miejsce na nocleg</h1>
        </div>

        <form class="row g-3">
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

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2021 Company, Inc</p>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>
</x-global>
