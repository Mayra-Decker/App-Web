@extends('layouts.layout')

@section('title', 'Ejercicios para Endomorfo')

@section('content')


    <div class="section-container">
        <h1 class="section-title">EJERCICIOS PARA ENDOMORFOS</h1>
        <p class="section-description">Para los endomorfos, la combinación de ejercicios de fuerza y cardio es clave para mejorar la composición corporal. A continuación, te presentamos una rutina diseñada para maximizar la pérdida de grasa mientras se gana músculo magro.</p>
    </div>
    
    <div class="exercise-section">
        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('day1')">Día 1: Pecho y Tríceps</h2>
            <div id="day1" class="exercise-details">
                <ul>
                    <li><strong>Press de banca con barra:</strong> 4 series de 10-12 repeticiones</li>
                    <li><strong>Press inclinado con mancuernas:</strong> 4 series de 10-12 repeticiones</li>
                    <li><strong>Aperturas en máquina o con mancuernas:</strong> 3 series de 12-15 repeticiones</li>
                    <li><strong>Fondos en paralelas:</strong> 3 series al fallo</li>
                    <li><strong>Extensión de tríceps en polea:</strong> 4 series de 12-15 repeticiones</li>
                    <li><strong>Press francés con barra Z:</strong> 3 series de 10-12 repeticiones</li>
                    <li><strong>Cardio HIIT:</strong> 15-20 minutos (Ejemplo: 30 segundos de sprint, 30 segundos de descanso)</li>
                </ul>
                <a href="{{ url('/options_exercises_endomorph/more_options_chest') }}" class="btn large-btn">Más Opciones</a>
            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('day2')">Día 2: Espalda y Bíceps</h2>
            <div id="day2" class="exercise-details">
                <ul>
                    <li><strong>Dominadas (asistidas si es necesario):</strong> 4 series de 8-10 repeticiones</li>
                    <li><strong>Remo con barra:</strong> 4 series de 10-12 repeticiones</li>
                    <li><strong>Jalones en polea alta:</strong> 3 series de 12-15 repeticiones</li>
                    <li><strong>Remo en máquina:</strong> 3 series de 10-12 repeticiones</li>
                    <li><strong>Curl con barra:</strong> 4 series de 10-12 repeticiones</li>
                    <li><strong>Curl en banco inclinado:</strong> 3 series de 12-15 repeticiones</li>
                    <li><strong>Cardio LISS:</strong> 20-30 minutos (caminata rápida o bicicleta a ritmo constante)</li>
                </ul>
                <a href="{{ url('/options_exercises_endomorph/more_options_back') }}" class="btn large-btn">Más Opciones</a>
            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('day3')">Día 3: Piernas y Abdomen</h2>
            <div id="day3" class="exercise-details">
                <ul>
                    <li><strong>Sentadillas con barra:</strong> 4 series de 10-12 repeticiones</li>
                    <li><strong>Prensa de piernas:</strong> 4 series de 12-15 repeticiones</li>
                    <li><strong>Peso muerto rumano:</strong> 4 series de 10-12 repeticiones</li>
                    <li><strong>Zancadas con mancuernas:</strong> 3 series de 12 repeticiones por pierna</li>
                    <li><strong>Elevación de talones en máquina:</strong> 4 series de 15-20 repeticiones</li>
                    <li><strong>Elevaciones de piernas colgado:</strong> 3 series de 15-20 repeticiones</li>
                    <li><strong>Plancha:</strong> 3 series de 1-2 minutos</li>
                    <li><strong>Cardio HIIT:</strong> 15 minutos (Ejemplo: 30 segundos de burpees, 30 segundos de descanso)</li>
                </ul>
                <a href="{{ url('/options_exercises_endomorph/more_options_legs') }}" class="btn large-btn">Más Opciones</a>
            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('day4')">Día 4: Hombros y Abdomen</h2>
            <div id="day4" class="exercise-details">
                <ul>
                    <li><strong>Press militar con barra o mancuernas:</strong> 4 series de 10-12 repeticiones</li>
                    <li><strong>Elevaciones laterales con mancuernas:</strong> 4 series de 12-15 repeticiones</li>
                    <li><strong>Pájaros con mancuernas:</strong> 3 series de 12-15 repeticiones</li>
                    <li><strong>Encogimientos de hombros con mancuernas:</strong> 4 series de 12-15 repeticiones</li>
                    <li><strong>Crunches con peso:</strong> 3 series de 20 repeticiones</li>
                    <li><strong>Bicicleta abdominal:</strong> 3 series de 15-20 repeticiones por lado</li>
                    <li><strong>Cardio LISS:</strong> 20-30 minutos (caminata rápida o elíptica)</li>
                </ul>
                <a href="{{ url('/options_exercises_endomorph/more_options_arms') }}" class="btn large-btn">Más Opciones</a>
            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('day5')">Día 5: Full Body + Cardio</h2>
            <div id="day5" class="exercise-details">
                <ul>
                    <li><strong>Clean and Press:</strong> 4 series de 6-8 repeticiones</li>
                    <li><strong>Thrusters (sentadilla con press):</strong> 3 series de 10 repeticiones</li>
                    <li><strong>Kettlebell Swings:</strong> 4 series de 15 repeticiones</li>
                    <li><strong>Burpees:</strong> 3 series de 15-20 repeticiones</li>
                    <li><strong>Dominadas:</strong> 3 series al fallo</li>
                    <li><strong>Cardio HIIT:</strong> 20 minutos (Ejemplo: 30 segundos de sprint, 30 segundos de descanso)</li>
                </ul>
                <a href="{{ url('/options_exercises_endomorph/more_options_abs') }}" class="btn large-btn">Más Opciones</a>
            </div>
        </div>

        <div class="tips-section">
            <h2>Consejos adicionales</h2>
            <ul>
                <li><strong>Dieta:</strong> Mantén una dieta rica en proteínas para apoyar la masa muscular y limita los carbohidratos simples y las grasas saturadas. Prioriza alimentos integrales y control de porciones.</li>
                <li><strong>Frecuencia de cardio:</strong> Incluye sesiones de cardio de intensidad alta (HIIT) y moderada (LISS) en cada entrenamiento para maximizar la quema de calorías.</li>
                <li><strong>Descanso:</strong> Es fundamental descansar al menos 1-2 días a la semana para la recuperación muscular.</li>
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
