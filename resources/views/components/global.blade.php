<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{asset('sass/app.css')}} " rel="stylesheet">
        <title>Sleepy</title>
    </head>

    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                                <a class="nav-link active" aria-current="page" href="{{route("index")}}">Start</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route("search")}}">Szukaj noclegu</a>
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

            {{ $slot }}

            <footer class="py-3 my-4 border-top">
                <div class="container">
                    <div class="row align-items-center">
                        <p class="col-lg-6 col-sm-12 text-center m-0">© 2021 Company, Inc</p>

                        <div class="col-lg-6 col-sm-12 d-flex flex-row justify-content-center">
                            <a href="#" class="nav-link px-2 text-muted">Home</a>
                            <a href="#" class="nav-link px-2 text-muted">Features</a>
                            <a href="#" class="nav-link px-2 text-muted">Pricing</a>
                            <a href="#" class="nav-link px-2 text-muted">FAQs</a>
                            <a href="#" class="nav-link px-2 text-muted">About</a>
                        </div>
                    </div>
                </div>
            </footer>
    </body>
</html>
