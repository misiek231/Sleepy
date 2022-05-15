<x-global>
    <div class="mt-5 container">
        <h1 class="p-5 text-center">Dodaj ofertę</h1>
        <form class="row g-3 align-items-end" method="post" action="{{route("search")}}">


            <div class="col-12">
                <label for="place" class="form-label">Lokalizacja</label>
                <input type="text" class="form-control" id="place" placeholder="Kraków">
            </div>

            <h3>Lista pokoi</h3>

            <div id="rooms" class="d-flex flex-column gap-5"></div>

            <div class="col-12">
                <button id="add-room-offer-button" type="button" class="btn btn-primary">Dodaj pokój</button>
                <button id="remove-room-offer-button" type="button" class="btn btn-primary">Usuń pokój</button>
            </div>

            <div class="col-md-6">
                <label for="accomodationType" class="form-label">Rodzaj zakwaterowania</label>
                <input type="text" class="form-control" id="accomodationType" placeholder="Pensjonat">
            </div>
            <div class="col-md-6">
                <label for="accomodationType" class="form-label">Lista udogodnień</label>
                <input type="text" class="form-control" id="accomodationType" placeholder="Pensjonat">
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Opis oferty</label>
                <textarea class="form-control" id="description" rows="7" placeholder="Super oferta"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </div>
        </form>
    </div>
</x-global>
