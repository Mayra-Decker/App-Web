<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BalanceBody</title>
    <link rel="stylesheet" href="{{ asset('css/app1.css') }}">
</head>
<body>
    <div class="hero">
        <img src="{{ asset('images/principal/img.png') }}" alt="BalanceBody Logo" class="hero-img">
        <h1 class="main-title">BalanceBody</h1>
        <p class="subtitle">Entrenar los Músculos</p>
        <a href="{{ url('/home') }}" class="cta-button">Comienza Ahora</a>
    </div>
    <div class="floating-elements">
        <div class="circle"></div>
        <div class="triangle"></div>
        <div class="square"></div>
    </div>
</body>
</html>
