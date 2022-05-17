<x-global>
    <div class="mt-5 container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$offer->name}}</h1>
            </div>
        </div>
        <h1 class="p-5 text-center">Dodaj pokój</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="row g-3 align-items-end" method="POST" action="{{route("rooms.store")}}">
            @csrf
            <div class="col-6">
                <label for="name" class="form-label">Nazwa</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @else is-valid @enderror" id="name" placeholder="Super pokoje">
            </div>
            <div class="col-6">
                <label for="price" class="form-label">Cena za dobę</label>
                <input name="price" type="number" class="form-control @error('price') is-invalid @else is-valid @enderror" id="price" placeholder="100">
            </div>
            <div class="col-6">
                <label for="beds-amount" class="form-label">Ilośc łóżek</label>
                <input name="beds_amount" type="number" class="form-control @error('beds-amount') is-invalid @else is-valid @enderror" id="beds-amount" placeholder="4">
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Opis pokoju</label>
                <textarea name="description" class="form-control @error('description') is-invalid @else is-valid @enderror" id="description" rows="7" placeholder="Super oferta"></textarea>
            </div>
            {{Form::hidden('$offer_id', $offer->id)}}
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Zapisz</button>
            </div>
        </form>
    </div>
</x-global>
