<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} :: @yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="logo">
        <img src="{{ asset('img/logo-sm-white.png') }}" alt="Digital">
    </div>
    
    <div class="conatiner">
        @yield('conteudo')
    </div>
    
    <footer>
        <p>Luiz Carlos - 2020</p>
    </footer>
</body>
</html>