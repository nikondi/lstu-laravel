<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ЛГТУ</title>
    <link rel="stylesheet" href="{{ asset('/fonts/Montserrat/stylesheet.css') }}">

    {{-- С САЙТА --}}
    <script type="text/javascript" src="/assets/js/libs/jquery.min.js"></script>

    <script type="text/javascript" src="/assets/js/js.cookie.min.js"></script>

    <script type="text/javascript" src="/assets/js/anchor.js"></script>

    <!-- Bootstrap JS engine -->
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>

    <!-- Eye javascript -->
    <script type="text/javascript" src="/assets/js/eye_new.js?v=1.1"></script>
    {{-- С САЙТА --}}

    @vite('resources/css/styles.scss')
</head>
<body>

<div id="google_translate_element"></div>

@include('parts.sidebar')

<div class="wrapper">
    <main class="page-content">
        {{--@include('parts.frontbar')--}}
        @yield('content')
    </main>

    @include('parts.footer')
</div>



@include('parts.side_menu')
@include('parts.search')


<script type="text/javascript" src="/assets/js/lang.js?v=1.1" defer></script>

@vite([
    'resources/js/app.ts',
])
</body>
</html>
