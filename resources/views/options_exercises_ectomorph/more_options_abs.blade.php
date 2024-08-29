@extends('layouts.layout')

@section('title', 'Ejercicios Avanzados para Abdominales')

@section('content')
    <div class="container">
        <h1>Ejercicios Avanzados para Abdominales </h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos del abdomen.</p>

        <div class="exercise-section">
            <!-- Ejercicio 1: Crunch Abdominal -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise1')">Crunch Abdominal (Crunch)</h2>
                <div id="exercise1" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo o banco.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate boca arriba con las rodillas flexionadas y los pies en el suelo. Coloca las manos detrás de la cabeza o cruzadas sobre el pecho. Levanta la parte superior del cuerpo hacia las rodillas sin despegar la zona lumbar del suelo. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 15-20 repeticiones.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 2: Elevación de Piernas Colgado -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise2')">Elevación de Piernas Colgado (Hanging Leg Raise)</h2>
                <div id="exercise2" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra de dominadas.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, flexores de cadera.</p>
                    <p><strong>Cómo hacerlo:</strong> Cuelga de una barra con las manos a la anchura de los hombros. Manteniendo las piernas rectas, levántalas hasta que estén paralelas al suelo o más arriba. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 3: Plancha -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise3')">Plancha (Plank)</h2>
                <div id="exercise3" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, transverso abdominal, oblicuos, músculos estabilizadores del core.</p>
                    <p><strong>Cómo hacerlo:</strong> Colócate en posición de plancha con los antebrazos en el suelo y el cuerpo alineado. Mantén la posición contrayendo el abdomen durante el tiempo determinado.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 30-60 segundos.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 4: Bicicleta Abdominal -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise4')">Bicicleta Abdominal (Bicycle Crunch)</h2>
                <div id="exercise4" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, oblicuos.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate boca arriba con las manos detrás de la cabeza y las piernas levantadas. Lleva el codo derecho hacia la rodilla izquierda mientras extiendes la pierna derecha, luego alterna con el codo izquierdo hacia la rodilla derecha en un movimiento de pedaleo.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 15-20 repeticiones por lado.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 5: Elevación de Rodillas en Paralelas -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">Elevación de Rodillas en Paralelas (Captain's Chair Leg Raise)</h2>
                <div id="exercise5" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Silla Romana (Captain's Chair).</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, flexores de cadera.</p>
                    <p><strong>Cómo hacerlo:</strong> Colócate en la Silla Romana con los antebrazos apoyados y las piernas colgando. Levanta las rodillas hacia el pecho manteniendo el torso estable. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 6: Ab Wheel Rollout -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise6')">Ab Wheel Rollout (Rodillo Abdominal)</h2>
                <div id="exercise6" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Rueda abdominal.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, transverso abdominal, oblicuos, músculos estabilizadores del core.</p>
                    <p><strong>Cómo hacerlo:</strong> Arrodíllate en el suelo, sostén la rueda con ambas manos frente a ti. Rueda hacia adelante manteniendo el abdomen contraído hasta que el torso esté casi paralelo al suelo. Vuelve a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 7: Crunch Invertido -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise7')">Crunch Invertido (Reverse Crunch)</h2>
                <div id="exercise7" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo o banco.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal (especialmente la parte inferior).</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate boca arriba con las manos a los lados o agarrando un banco detrás de ti. Levanta las piernas hacia el techo y luego lleva las rodillas hacia el pecho, levantando las caderas del suelo. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 15-20 repeticiones.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 8: Giros Rusos -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise8')">Giros Rusos (Russian Twist)</h2>
                <div id="exercise8" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Pesas o balón medicinal opcional.</p>
                    <p><strong>Músculos Trabajados:</strong> Oblicuos, recto abdominal.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en el suelo con las rodillas flexionadas y los pies levantados. Sostén una pesa o balón medicinal y gira el torso de un lado al otro, tocando el suelo con la pesa en cada giro.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 20 repeticiones (10 por lado).</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 9: Plancha Lateral -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise9')">Plancha Lateral (Side Plank)</h2>
                <div id="exercise9" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo.</p>
                    <p><strong>Músculos Trabajados:</strong> Oblicuos, transverso abdominal, recto abdominal, músculos estabilizadores del core.</p>
                    <p><strong>Cómo hacerlo:</strong> Colócate de lado con el antebrazo en el suelo y el cuerpo alineado. Eleva las caderas hasta que el cuerpo forme una línea recta. Mantén la posición durante el tiempo determinado.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 30-60 segundos por lado.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 10: Mountain Climbers -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise10')">Mountain Climbers (Escaladores)</h2>
                <div id="exercise10" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, oblicuos, flexores de cadera, cuádriceps, glúteos.</p>
                    <p><strong>Cómo hacerlo:</strong> Colócate en posición de plancha con los brazos extendidos. Lleva una rodilla hacia el pecho y luego cámbiala rápidamente por la otra, como si estuvieras corriendo en el lugar.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 30-45 segundos.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 11: V-Up -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise11')">V-Up (V-Up)</h2>
                <div id="exercise11" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, oblicuos, flexores de cadera.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate boca arriba con los brazos extendidos por encima de la cabeza y las piernas rectas. Levanta simultáneamente los brazos y las piernas, intentando tocar los pies con las manos en la parte superior del movimiento. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 15-20 repeticiones.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 12: Crunch en Máquina -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise12')">Crunch en Máquina (Machine Ab Crunch)</h2>
                <div id="exercise12" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de crunch abdominal.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en la máquina y ajusta el peso. Agarra las manijas y contrae el abdomen para empujar hacia adelante, realizando un crunch. Vuelve a la posición inicial controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function toggleExerciseDetails(id) {
            var details = document.getElementById(id);

            if (details.style.maxHeight) {
                details.style.maxHeight = null;
            } else {
                details.style.maxHeight = details.scrollHeight + "px";
            }
        }
    </script>

        <div class="tips-section">
            <h2>Consejos Adicionales</h2>
            <ul>
                <li><strong>Calentamiento:</strong> Realiza un calentamiento de 5-10 minutos antes de comenzar, con ejercicios ligeros de movilidad y activación del core.</li>
                <li><strong>Progresión:</strong> Aumenta la intensidad de los ejercicios a medida que te vuelvas más fuerte, ya sea incrementando las repeticiones, la duración o añadiendo peso.</li>
                <li><strong>Variación:</strong> Cambia los ejercicios cada 4-6 semanas para mantener la efectividad y continuar progresando.</li>
            </ul>
        </div>
    </div>
@endsection
