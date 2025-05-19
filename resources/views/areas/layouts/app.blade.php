<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Áreas - AdminSENA')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('areas.includes.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('areas.includes.footer')
</body>
</html>
