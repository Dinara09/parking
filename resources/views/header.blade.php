<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{URL::asset('public/js/app.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/css/app.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
          crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
<div class="container d-flex flex-column flex-md-row align-items-center pb-3 mb-4 bg-dark text-white border-bottom">
    <a href="/" class="d-flex align-items-center text-white text-decoration-none">
        <span class="fs-4 text-white parking">Все клиенты</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-white text-decoration-none" href="/create">Создание</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/parking">Стоянка</a>
    </nav>
</div>
<script src="/resources/js/app.js"></script>
<div class="container">
    @yield('content')
</div>


</body>
</html>
