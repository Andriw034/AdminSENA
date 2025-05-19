<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Aprendices - AdminSENA')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('apprentices.includes.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('apprentices.includes.footer')
</body>
</html>
