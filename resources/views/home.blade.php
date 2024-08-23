@extends('layouts.layout')
@vite(['resources/js/app.js', 'resources/css/app.css'])
@section('title', 'Tipos de Cuerpo')

@section('content')
    <h1>Tipos de Cuerpo</h1>

    <div class="card-container">
        <div class="card">
            <h2>Cuerpo 1: Ectomorfo</h2>
            <h3>Características:</h3>
            <ul>
                <li>Estructura corporal delgada y ligera.</li>
                <li>Hombros estrechos y caderas delgadas.</li>
                <li>Dificultad para ganar masa muscular y grasa.</li>
                <li>Metabolismo rápido.</li>
                <li>Ejemplo: Personas que tienen una complexión delgada y encuentran difícil ganar peso, tanto en músculo como en grasa.</li>
            </ul>
            <a href="{{ route('ectomorph.diet') }}" class="btn large-btn">Dieta</a>
            <a href="{{ route('ectomorph.exercises') }}" class="btn large-btn">Ejercicios</a>
        </div>

        <div class="card">
            <h2>Cuerpo 2: Mesomorfo</h2>
            <h3>Características:</h3>
            <ul>
                <li>Estructura corporal atlética y musculosa.</li>
                <li>Hombros anchos y cintura estrecha.</li>
                <li>Facilidad para ganar masa muscular y perder grasa.</li>
                <li>Huesos más grandes y densos.</li>
                <li>Metabolismo eficiente y equilibrado.</li>
                <li>Ejemplo: Personas con una complexión natural atlética, que pueden desarrollar músculo con relativa facilidad y mantenerse en forma.</li>
            </ul>
            <a href="{{ route('mesomorph.diet') }}" class="btn large-btn">Dieta</a>
            <a href="{{ route('mesomorph.exercises') }}" class="btn large-btn">Ejercicios</a>
        </div>

        <div class="card">
            <h2>Cuerpo 3: Endomorfo</h2>
            <h3>Características:</h3>
            <ul>
                <li>Estructura corporal más ancha y densa.</li>
                <li>Mayor tendencia a acumular grasa corporal, especialmente en la zona abdominal, caderas y muslos.</li>
                <li>Metabolismo más lento, lo que puede dificultar la pérdida de peso.</li>
                <li>Cuerpo redondeado y suave.</li>
                <li>Ejemplo: Personas que tienden a ganar peso fácilmente y pueden tener dificultades para perder grasa corporal, pero también pueden ganar músculo con facilidad.</li>
            </ul>
            <a href="{{ route('endomorph.diet') }}" class="btn large-btn">Dieta</a>
            <a href="{{ route('endomorph.exercises') }}" class="btn large-btn">Ejercicios</a>
        </div>
    </div>
@endsection
