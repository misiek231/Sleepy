<x-global>
    <div class="container mt-5">
        <div class="d-flex">
            <div class="col-3 d-flex justify-content-center" style="background-color: #a0aec0">
                <h3>Filtry</h3>
            </div>
            <div class="col-8 ms-2">
                @for($i = 0; $i < 10; $i++)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset("storage/home.jpg")}}" class="img-fluid h-100 p-0 m-0" alt="img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Domek nad zalewem</h5>
                                    <p class="card-text">Oferujemy pokoje w świetnej cenie, wyżywienie, atrakcje dookoła. Domek jest przystosowany dla rodzin z dziećmi jak i dla imprezujących studentów</p>
                                    <a href="#" class="btn btn-primary">Sprawdź szczegóły</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</x-global>
