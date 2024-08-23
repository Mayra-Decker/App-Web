@extends('layouts.layout')

@section('title', 'Ejercicios para Ectomorfo')

@section('content')
    <div class="intro-section">
        <h1>Ejercicios para Ectomorfos</h1>
        <p>A continuación, te presentamos una rutina de ejercicios ideal para personas con cuerpo ectomorfo, diseñada para maximizar la ganancia muscular y la fuerza.</p>
    </div>

    <div class="exercise-section">
    <div class="exercise">
    <h2><a href="{{ route('exercises.chest') }}" class="exercise-link">Pecho</a></h2>
    <h3>Press de Banca:</h3>
    <ul>
        <li>4 series de 8-10 repeticiones</li>
        <li>Usa una barra con un peso moderado a pesado.</li>
    </ul>
    <h3>Press Inclinado con Mancuernas:</h3>
    <ul>
        <li>4 series de 8-10 repeticiones</li>
        <li>Enfócate en un movimiento controlado.</li>
    </ul>
</div>


        <div class="exercise">
            <h2>Espalda</h2>
            <h3>Dominadas:</h3>
            <ul>
                <li>4 series al fallo</li>
                <li>Utiliza un agarre ancho para maximizar la activación muscular.</li>
            </ul>
            <h3>Remo con Barra:</h3>
            <ul>
                <li>4 series de 8-10 repeticiones</li>
                <li>Concentra el esfuerzo en los músculos de la espalda media.</li>
            </ul>
        </div>

        <div class="exercise">
            <h2>Piernas</h2>
            <h3>Sentadilla con Barra:</h3>
            <ul>
                <li>4 series de 8-12 repeticiones</li>
                <li>Mantén la espalda recta y baja hasta que los muslos estén paralelos al suelo.</li>
            </ul>
            <h3>Prensa de Piernas:</h3>
            <ul>
                <li>4 series de 10-12 repeticiones</li>
                <li>Controla el movimiento, evitando bloquear las rodillas.</li>
            </ul>
        </div>

        <div class="exercise">
            <h2>Brazos</h2>
            <h3>Curl de Bíceps con Barra:</h3>
            <ul>
                <li>4 series de 8-10 repeticiones</li>
                <li>Mantén los codos cerca del cuerpo y sube la barra de manera controlada.</li>
            </ul>
            <h3>Extensiones de Tríceps en Polea:</h3>
            <ul>
                <li>4 series de 10-12 repeticiones</li>
                <li>Enfócate en el estiramiento y la contracción completa.</li>
            </ul>
        </div>

        <div class="exercise">
            <h2>Abdomen</h2>
            <h3>Crunch en Máquina:</h3>
            <ul>
                <li>4 series de 15-20 repeticiones</li>
                <li>Concéntrate en contraer los abdominales al máximo.</li>
            </ul>
            <h3>Elevación de Piernas Colgado:</h3>
            <ul>
                <li>4 series de 10-12 repeticiones</li>
                <li>Levanta las piernas hasta que estén paralelas al suelo, manteniendo el control.</li>
            </ul>
        </div>
    </div>
@endsection
