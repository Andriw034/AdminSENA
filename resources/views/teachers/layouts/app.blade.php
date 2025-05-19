<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Profesores - AdminSENA')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('teachers.includes.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('teachers.includes.footer')
</body>
</html>
