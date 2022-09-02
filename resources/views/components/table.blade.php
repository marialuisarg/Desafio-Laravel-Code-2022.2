<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container mt-2">ENTROU EM PRODUTOS!</div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 ">
                <img src="{{ asset('img/logo-lu.png') }}" alt="Logo BomBom da Lu" class="img-fluid">
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>