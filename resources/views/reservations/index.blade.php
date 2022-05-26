<x-global>
    <div class="container mt-5 pt-5">
        <div class="row gap-1">

            <div class="d-flex gap-2 flex-column col-lg-8 col-sm-12 p-0">
                @foreach($reservations as $reservation)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12">
                                    <h5 class="card-title">{{ $reservation->room->name }}</h5>
                                    <p class="card-text">{{ $reservation->date_from }}</p>
                                    <p class="card-text">{{ $reservation->date_to }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-global>
