<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Computadoras - AdminSENA')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('computers.includes.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('computers.includes.footer')
</body>
</html>
