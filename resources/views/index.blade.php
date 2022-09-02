<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>
<body>
    <div id="myCarousel" class="carousel container slide">
        <div class="carousel-inner">
                <div class="active item one"></div>
                <div class="item two"></div>
                <div class="item three"></div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 pt-4">
            <div class="col-md-3 mx-auto">
                <img src="{{ asset('img/logo-lu.png') }}" alt="Logo BomBom da Lu" class="img-fluid mx-auto d-block">
            </div>
        </div>

        <div class="row mt-5">
            <button type="button" class="btn btn-basic btn-lg btn-pequeno mx-auto">
                <a href="{{ route('login') }}" class="text-white">Área do Cliente</a>
            </button>
        </div>

        <div class="row mt-3">
            <button type="button" class="btn btn-basic btn-lg btn-pequeno mx-auto">
                <a href="{{ route('login') }}" class="text-white">Área do Funcionário</a>
            </button>
        </div>

    </div>

    <script src={{ resource_path('js/index.js') }}></script>
</body>
</html>