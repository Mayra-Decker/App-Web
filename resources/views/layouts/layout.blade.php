<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
    <a href="{{ route('home') }}" class="menu-inicio">
    <i class="fas fa-home" style="margin-right: 8px; margin-left: 10px;"></i> Inicio</a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
