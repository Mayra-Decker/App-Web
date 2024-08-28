@extends('layouts.layout')

@section('title', 'Más Opciones: Ejercicios para Piernas y Abdomen')

@section('content')
    <div class="container">
        <h1>Más Opciones: Ejercicios para Piernas y Abdomen</h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos de las piernas y el abdomen.</p>

        <div class="exercise-section">
            <!-- Ejercicio 1: Sentadilla con Barra (Barbell Squat) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise1')">Sentadilla con Barra (Barbell Squat)</h2>
                <div id="exercise1" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta y rack de sentadillas.</p>
                    <p><strong>Músculos Trabajados:</strong> Cuádriceps, glúteos, isquiotibiales, erectores espinales.</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca la barra sobre los trapecios, con los pies a la anchura de los hombros. Baja el cuerpo doblando las rodillas y las caderas, manteniendo la espalda recta, hasta que los muslos estén paralelos al suelo. Empuja hacia arriba para volver a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90-120 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 2: Prensa de Piernas (Leg Press) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise2')">Prensa de Piernas (Leg Press)</h2>
                <div id="exercise2" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de prensa de piernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Cuádriceps, glúteos, isquiotibiales.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en la máquina y coloca los pies en la plataforma. Empuja la plataforma hacia arriba extendiendo las rodillas y las caderas, luego baja controladamente hasta que las rodillas estén a 90 grados.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 3: Peso Muerto Rumano (Romanian Deadlift) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise3')">Peso Muerto Rumano (Romanian Deadlift)</h2>
                <div id="exercise3" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta o mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Isquiotibiales, glúteos, erectores espinales.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén una barra o mancuernas frente a tus muslos, con las rodillas ligeramente flexionadas. Mantén la espalda recta y baja la barra mientras empujas las caderas hacia atrás. Levanta la barra volviendo a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-10 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90-120 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 4: Estocadas con Mancuernas (Dumbbell Lunges) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise4')">Estocadas con Mancuernas (Dumbbell Lunges)</h2>
                <div id="exercise4" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Cuádriceps, glúteos, isquiotibiales.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén una mancuerna en cada mano, da un paso hacia adelante con una pierna, bajando el cuerpo hasta que ambas rodillas estén a 90 grados. Empuja hacia atrás para regresar a la posición inicial y repite con la otra pierna.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones por pierna.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 5: Sentadilla Búlgara (Bulgarian Split Squat) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">Sentadilla Búlgara (Bulgarian Split Squat)</h2>
                <div id="exercise5" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas o barra recta.</p>
                    <p><strong>Músculos Trabajados:</strong> Cuádriceps, glúteos, isquiotibiales.</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca el pie trasero sobre un banco, sostén una mancuerna en cada mano o usa una barra sobre los hombros. Baja el cuerpo con la pierna delantera hasta que la rodilla esté a 90 grados. Empuja hacia arriba para volver a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones por pierna.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 6: Crunch Abdominal (Crunch) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise6')">Crunch Abdominal (Crunch)</h2>
                <div id="exercise6" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo o banco.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate boca arriba con las rodillas flexionadas y los pies en el suelo. Coloca las manos detrás de la cabeza o cruzadas sobre el pecho. Levanta la parte superior del cuerpo hacia las rodillas sin despegar la zona lumbar del suelo. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 15-20 repeticiones.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 7: Elevación de Piernas (Leg Raises) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise7')">Elevación de Piernas (Leg Raises)</h2>
                <div id="exercise7" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo o colgado de una barra.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, flexores de cadera.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate boca arriba con las piernas extendidas. Levanta las piernas hasta que estén perpendiculares al suelo, y luego bájalas controladamente sin tocar el suelo.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 8: Plancha (Plank) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise8')">Plancha (Plank)</h2>
                <div id="exercise8" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, transverso abdominal, oblicuos, músculos estabilizadores del core.</p>
                    <p><strong>Cómo hacerlo:</strong> Colócate en posición de plancha con los antebrazos en el suelo y el cuerpo alineado. Mantén la posición contrayendo el abdomen durante el tiempo determinado.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 30-60 segundos.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 9: Russian Twists -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise9')">Russian Twists</h2>
                <div id="exercise9" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Pesas o balón medicinal opcional.</p>
                    <p><strong>Músculos Trabajados:</strong> Oblicuos, recto abdominal.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en el suelo con las rodillas flexionadas y los pies levantados. Sostén una pesa o balón medicinal y gira el torso de un lado al otro, tocando el suelo con la pesa en cada giro.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 20 repeticiones (10 por lado).</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 10: Mountain Climbers -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise10')">Mountain Climbers</h2>
                <div id="exercise10" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, oblicuos, flexores de cadera, cuádriceps, glúteos.</p>
                    <p><strong>Cómo hacerlo:</strong> Colócate en posición de plancha con los brazos extendidos. Lleva una rodilla hacia el pecho y luego cámbiala rápidamente por la otra, como si estuvieras corriendo en el lugar.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 30-45 segundos.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
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

@endsection
