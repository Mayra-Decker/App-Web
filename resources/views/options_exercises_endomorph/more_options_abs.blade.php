@extends('layouts.layout')

@section('title', 'Más Opciones: Ejercicios para Hombros y Abdomen')

@section('content')
    <div class="container">
        <h1>Más Opciones: Ejercicios para Hombros y Abdomen</h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos de los hombros y el abdomen.</p>

        <div class="exercise-section">
            <!-- Ejercicio 1: Press Militar con Mancuernas (Dumbbell Shoulder Press) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise1')">Press Militar con Mancuernas (Dumbbell Shoulder Press)</h2>
                <div id="exercise1" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas y banco con respaldo.</p>
                    <p><strong>Músculos Trabajados:</strong> Deltoides anterior, deltoides lateral, tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en un banco con respaldo, sostén una mancuerna en cada mano a la altura de los hombros. Empuja las mancuernas hacia arriba hasta que los brazos estén completamente extendidos. Baja las mancuernas de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 2: Elevaciones Laterales con Mancuernas (Lateral Raises) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise2')">Elevaciones Laterales con Mancuernas (Lateral Raises)</h2>
                <div id="exercise2" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Deltoides lateral.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén una mancuerna en cada mano con los brazos a los lados. Levanta las mancuernas lateralmente hasta que los brazos estén paralelos al suelo. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 3: Elevaciones Frontales con Barra o Mancuernas (Front Raises) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise3')">Elevaciones Frontales con Barra o Mancuernas (Front Raises)</h2>
                <div id="exercise3" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra o mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Deltoides anterior.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén la barra o las mancuernas frente a los muslos con las palmas hacia abajo. Levanta los brazos hacia el frente hasta que estén a la altura de los hombros. Baja de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 4: Press Arnold (Arnold Press) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise4')">Press Arnold (Arnold Press)</h2>
                <div id="exercise4" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Deltoides anterior, deltoides lateral, deltoides posterior, tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en un banco con respaldo, sostén las mancuernas frente a ti con las palmas hacia tu cuerpo. A medida que empujas las mancuernas hacia arriba, gira las muñecas para que las palmas queden hacia afuera en la parte superior del movimiento.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 5: Elevaciones Posteriores con Mancuernas (Bent-Over Rear Delt Flyes) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">Elevaciones Posteriores con Mancuernas (Bent-Over Rear Delt Flyes)</h2>
                <div id="exercise5" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Deltoides posterior, trapecio.</p>
                    <p><strong>Cómo hacerlo:</strong> Inclínate hacia adelante con las rodillas ligeramente flexionadas y la espalda recta. Sostén una mancuerna en cada mano con los brazos colgando. Levanta las mancuernas hacia los lados, manteniendo los codos ligeramente flexionados. Baja de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 6: V-Ups -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise6')">V-Ups</h2>
                <div id="exercise6" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, oblicuos, flexores de cadera.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate boca arriba con los brazos extendidos por encima de la cabeza y las piernas rectas. Levanta simultáneamente los brazos y las piernas, intentando tocar los pies con las manos en la parte superior del movimiento. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 15-20 repeticiones.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 7: Ab Wheel Rollout -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise7')">Ab Wheel Rollout</h2>
                <div id="exercise7" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Rueda abdominal.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, transverso abdominal, oblicuos, músculos estabilizadores del core.</p>
                    <p><strong>Cómo hacerlo:</strong> Arrodíllate en el suelo, sostén la rueda con ambas manos frente a ti. Rueda hacia adelante manteniendo el abdomen contraído hasta que el torso esté casi paralelo al suelo. Vuelve a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 8: Crunch Invertido (Reverse Crunch) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise8')">Crunch Invertido (Reverse Crunch)</h2>
                <div id="exercise8" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna, en el suelo o banco.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal (especialmente la parte inferior).</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate boca arriba con las manos a los lados o agarrando un banco detrás de ti. Levanta las piernas hacia el techo y luego lleva las rodillas hacia el pecho, levantando las caderas del suelo. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 15-20 repeticiones.</p>
                    <p><strong>Descanso:</strong> 30-60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 9: Plancha Lateral (Side Plank) -->
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

            <!-- Ejercicio 10: Levantamiento de Piernas Colgado (Hanging Leg Raises) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise10')">Levantamiento de Piernas Colgado (Hanging Leg Raises)</h2>
                <div id="exercise10" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra de dominadas.</p>
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, flexores de cadera.</p>
                    <p><strong>Cómo hacerlo:</strong> Cuelga de una barra con las manos a la anchura de los hombros. Manteniendo las piernas rectas, levántalas hasta que estén paralelas al suelo o más arriba. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 10-15 repeticiones.</p>
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

@endsection
