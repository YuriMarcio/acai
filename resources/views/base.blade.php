<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    {{-- static archives --}}
    <link rel="stylesheet" href="{{ asset('/css/output.css') }}">
    {{-- script --}}
</head>
<body class="bg-gray-100">
    @yield('content')
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ asset('/js/carousel.js') }}"></script>
</body>
</html>
