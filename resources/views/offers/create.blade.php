<x-global>
    <div class="mt-5 container">
        <h1 class="p-5 text-center">Dodaj ofertę</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="row g-3 align-items-end" method="POST" action="{{route("offers.store")}}" enctype="multipart/form-data">
            @csrf
            <div class="col-6">
                <label for="name" class="form-label">Nazwa</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @else is-valid @enderror" id="name" placeholder="Super pokoje">
            </div>
            <div class="col-6">
                <label for="place" class="form-label">Lokalizacja</label>
                <input name="place" type="text" class="form-control @error('place') is-invalid @else is-valid @enderror" id="place" placeholder="Kraków">
            </div>
            <div class="col-6">
                <label for="accommodationType" class="form-label">Rodzaj zakwaterowania</label>
                <input name="accommodationType" type="text" class="form-control @error('accommodationType') is-invalid @else is-valid @enderror" id="accommodationType" placeholder="Pensjonat">
            </div>
            <div class="col-6">
                <label for="image" class="form-label">Dodaj zdjęcia</label>
                <input name="image" class="form-control @error('image') is-invalid @else is-valid @enderror" type="file" id="image" multiple>
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Opis oferty</label>
                <textarea name="description" class="form-control @error('description') is-invalid @else is-valid @enderror" id="description" rows="7" placeholder="Super oferta"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </div>
        </form>
    </div>
</x-global>
