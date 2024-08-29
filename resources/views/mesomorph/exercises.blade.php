@extends('layouts.layout')

@section('title', 'Ejercicios para Mesomorfos')

@section('content')

<div class="section-container">
    <h1 class="section-title">Ejercicios para Mesomorfo</h1>
    <p class="section-description">Esta rutina está diseñada específicamente para mesomorfos, enfocándose en desarrollar fuerza y músculo a lo largo de varios días de entrenamiento con ejercicios variados y bien equilibrados.</p>
</div>


    <div class="exercise-section">
        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('day1')">Día 1: Pecho y Tríceps</h2>
            <div id="day1" class="exercise-details">
                <ul>
                    <li><strong>Press de banca con barra:</strong> 4 series de 8-10 repeticiones</li>
                    <li><strong>Press inclinado con mancuernas:</strong> 4 series de 8-10 repeticiones</li>
                    <li><strong>Aperturas con mancuernas en banco plano:</strong> 3 series de 10-12 repeticiones</li>
                    <li><strong>Fondos en paralelas:</strong> 3 series al fallo</li>
                    <li><strong>Extensiones de tríceps en polea:</strong> 4 series de 12-15 repeticiones</li>
                    <li><strong>Press francés con barra:</strong> 3 series de 10-12 repeticiones</li>
                </ul>

                <a href="{{ url('/exercises/mesomorph/chest') }}" class="btn large-btn">Más Opciones</a>
           
            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('day2')">Día 2: Espalda y Bíceps</h2>
            <div id="day2" class="exercise-details">
                <ul>
                    <li><strong>Dominadas (con peso si es posible):</strong> 4 series de 8-10 repeticiones</li>
                    <li><strong>Remo con barra:</strong> 4 series de 8-10 repeticiones</li>
                    <li><strong>Remo en polea baja:</strong> 3 series de 10-12 repeticiones</li>
                    <li><strong>Pull-over con mancuerna:</strong> 3 series de 10-12 repeticiones</li>
                    <li><strong>Curl con barra:</strong> 4 series de 8-10 repeticiones</li>
                    <li><strong>Curl concentrado:</strong> 3 series de 12-15 repeticiones</li>
                </ul>

                <a href="{{ url('/exercises/mesomorph/back') }}" class="btn large-btn">Más Opciones</a>

            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('day3')">Día 3: Piernas</h2>
            <div id="day3" class="exercise-details">
                <ul>
                    <li><strong>Sentadilla con barra:</strong> 4 series de 8-10 repeticiones</li>
                    <li><strong>Prensa de piernas:</strong> 4 series de 10-12 repeticiones</li>
                    <li><strong>Peso muerto rumano:</strong> 4 series de 8-10 repeticiones</li>
                    <li><strong>Zancadas con mancuernas:</strong> 3 series de 12 repeticiones por pierna</li>
                    <li><strong>Elevación de talones en máquina (para gemelos):</strong> 4 series de 15-20 repeticiones</li>
                    <li><strong>Peso muerto convencional:</strong> 3 series de 8-10 repeticiones</li>
                </ul>

                    <a href="{{ url('/exercises/mesomorph/legs') }}" class="btn large-btn">Más Opciones</a>

            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('day4')">Día 4: Hombros y Abdomen</h2>
            <div id="day4" class="exercise-details">
                <ul>
                    <li><strong>Press militar con barra:</strong> 4 series de 8-10 repeticiones</li>
                    <li><strong>Elevaciones laterales con mancuernas:</strong> 4 series de 12-15 repeticiones</li>
                    <li><strong>Pájaros en banco inclinado (elevaciones posteriores):</strong> 3 series de 12-15 repeticiones</li>
                    <li><strong>Encogimientos con barra (trapecio):</strong> 4 series de 10-12 repeticiones</li>
                    <li><strong>Plancha:</strong> 3 series de 1-2 minutos</li>
                    <li><strong>Elevaciones de piernas colgado:</strong> 3 series de 15-20 repeticiones</li>
                    <li><strong>Crunch con cable:</strong> 3 series de 15-20 repeticiones</li>
                </ul>

                <a href="{{ url('/exercises/mesomorph/abs') }}" class="btn large-btn">Más Opciones</a>

            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('day5')">Día 5: Brazos</h2>
            <div id="day5" class="exercise-details">
                <ul>
                    <li><strong>Clean and Press:</strong> 4 series de 6-8 repeticiones</li>
                    <li><strong>Burpees:</strong> 3 series de 15-20 repeticiones</li>
                    <li><strong>Swing con kettlebell:</strong> 4 series de 15 repeticiones</li>
                    <li><strong>Dominadas:</strong> 3 series al fallo</li>
                    <li><strong>Sentadilla con salto:</strong> 4 series de 15 repeticiones</li>
                    <li><strong>Plancha lateral:</strong> 3 series de 1-2 minutos por lado</li>
                </ul>

                <a href="{{ url('/exercises/mesomorph/arms') }}" class="btn large-btn">Más Opciones</a>

            </div>
        </div>

        <div class="tips-section">
            <h2>Consejos adicionales</h2>
            <ul>
                <li><strong>Descanso:</strong> Descansa al menos un día a la semana y asegúrate de dormir lo suficiente para una adecuada recuperación muscular.</li>
                <li><strong>Cardio:</strong> Añade 20-30 minutos de cardio moderado (como correr o bicicleta) 2-3 veces por semana si tu objetivo también incluye mantener la grasa corporal baja.</li>
                <li><strong>Nutrición:</strong> Como mesomorfo, asegúrate de mantener una dieta equilibrada en proteínas, carbohidratos y grasas saludables para apoyar el crecimiento muscular y la recuperación.</li>
            </ul>
        </div>
    </div>

    <script>
    function toggleExerciseDetails(id) {
        var header = document.querySelector('[onclick="toggleExerciseDetails(\'' + id + '\')"]');
        var details = document.getElementById(id);

        if (details.style.maxHeight) {
            details.style.maxHeight = null;
            header.classList.remove('active');
        } else {
            details.style.maxHeight = details.scrollHeight + "px";
            header.classList.add('active');
        }
    }
    </script>

@endsection
