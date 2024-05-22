<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ЛГТУ</title>
    <link rel="stylesheet" href="{{ asset('/fonts/Montserrat/stylesheet.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>
<div class="wrapper">
    @include('parts.sidebar')
    <main class="page-content">
        @include('parts.frontbar')
        @yield('content')
    </main>
</div>


@include('parts.footer')

@include('parts.side_menu')
@include('parts.search')



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@vite([
    'resources/js/js.js',
    'resources/js/main.js'
])
</body>
</html>
