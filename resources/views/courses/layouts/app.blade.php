<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Cursos - AdminSENA')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('courses.includes.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('courses.includes.footer')
</body>
</html>
