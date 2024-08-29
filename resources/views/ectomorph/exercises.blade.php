@extends('layouts.layout')

@section('title', 'Ejercicios para Ectomorfo')

@section('content')
    
    <div class="section-container">
        <h1 class="section-title">EJERCICIOS PARA ECTOMORFOS</h1>
        <p class="section-description">A continuación, te presentamos una rutina de ejercicios ideal para personas con cuerpo ectomorfo, diseñada para maximizar la ganancia muscular y la fuerza.</p>
    </div>

    <div class="exercise-section">
        <div class="exercise">
            <h2 class="exercise-header">Día 1: Pecho</h2>
            <div class="exercise-details">
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

                <!-- Botón "Más opciones" -->
                <a href="{{ url('/options_exercises_ectomorph/more_options') }}" class="btn large-btn">Más Opciones</a>
            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header">Día 2: Espalda</h2>
            <div class="exercise-details">
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

                <!-- Botón "Más opciones" -->
                <a href="{{ url('/options_exercises_ectomorph/more_options_back') }}" class="btn large-btn">Más Opciones</a>
            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header">Día 3: Piernas</h2>
            <div class="exercise-details">
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

                <!-- Botón "Más opciones" -->
                <a href="{{ url('/options_exercises_ectomorph/more_options_legs') }}" class="btn large-btn">Más Opciones</a>
            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header">Día 4: Brazos</h2>
            <div class="exercise-details">
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

                <!-- Botón "Más opciones" -->
                <a href="{{ url('/options_exercises_ectomorph/more_options_arms') }}" class="btn large-btn">Más Opciones</a>
            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header">Día 5: Abdomen</h2>
            <div class="exercise-details">
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

                <!-- Botón "Más opciones" -->
                <a href="{{ url('/options_exercises_ectomorph/more_options_abs') }}" class="btn large-btn">Más Opciones</a>
            </div>
        </div>
    </div>


    <div class="tips-section">
            <h2>Consejos adicionales</h2>
            <ul>
                <li><strong>Dieta:</strong>: Aumenta tu consumo calórico por encima de tu gasto energético para facilitar la ganancia de peso. Los ectomorfos deben enfocarse en consumir más calorías de las que queman. Apunta a consumir 500-1000 calorías adicionales por día. </li>
                <li><strong>Frecuencia de cardio:</strong> Si haces cardio, opta por actividades de baja a moderada intensidad como caminar o ciclismo suave. Esto te ayudará a mantener la salud cardiovascular sin quemar demasiadas calorías que necesitas para crecer.</li>
                <li><strong>Descanso:</strong> Asegúrate de dormir entre 7-9 horas por noche. El sueño es crucial para la recuperación muscular y la síntesis de proteínas, especialmente para los ectomorfos que necesitan maximizar cada oportunidad para crecer.</li>
            </ul>
        </div>
    </div>

    <script>
        document.querySelectorAll('.exercise-header').forEach(header => {
            header.addEventListener('click', () => {
                const details = header.nextElementSibling;
                header.classList.toggle('active');
                if (header.classList.contains('active')) {
                    details.style.maxHeight = details.scrollHeight + 'px';
                } else {
                    details.style.maxHeight = 0;
                }
            });
        });
    </script>
@endsection
