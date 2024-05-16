<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>MilenaFerm</title>
</head>
<body>
<div class="video position-relative">
    <video autoplay muted loop id="myVideo" poster="@yield('poster')">
        <source src="@yield('video')">
    </video>
</div>
<div class="position-fixed top-0 start-0 w-100">
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand ms-5" href="#">MilenaFerm</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-5">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('about')}}"><h5>О нас</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('projects')}}"><h5>Проекты</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"><h5>Журнал</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"><h5>Контакты</h5></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>
<div class="position-absolute top-50 ms-5 bottom-50 w-75 text-center text-white">
    <div class="bg-dark bg-gradient bg-opacity-75 p-5">
        @yield('preview')
    </div>
</div>
<div class="container mt-5">
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
