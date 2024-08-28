@extends('layouts.layout')

@section('title', 'Ejercicios para el Abdomen')

@section('content')
    <div class="container">
        <h1>Ejercicios para el Abdomen</h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos del abdomen.</p>

        <div class="exercise-section">
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise1')">Crunch Abdominal (Crunch)</h2>
                <div id="exercise1" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate boca arriba con las rodillas flexionadas y los pies apoyados en el suelo. Coloca las manos detrás de la cabeza y eleva el torso hacia las rodillas, concentrando el esfuerzo en el abdomen.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 15-20 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise2')">Elevación de Piernas Colgado (Hanging Leg Raise)</h2>
                <div id="exercise2" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, flexores de la cadera.</p>
                    <p><strong>Cómo hacerlo:</strong> Cuélgate de una barra fija y, manteniendo las piernas rectas, eleva los pies hacia el techo, contrayendo el abdomen. Baja las piernas lentamente a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90 segundos entre series.</p>
                </div>
            </div>

            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise3')">Plancha (Plank)</h2>
                <div id="exercise3" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, transverso abdominal, oblicuos, espalda baja.</p>
                    <p><strong>Cómo hacerlo:</strong> Colócate en posición de plancha con los antebrazos y las puntas de los pies apoyados en el suelo. Mantén el cuerpo recto y tenso, evitando que las caderas se caigan.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 30-60 segundos.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise4')">Bicicleta Abdominal (Bicycle Crunch)</h2>
                <div id="exercise4" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, oblicuos.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate boca arriba y lleva las rodillas hacia el pecho. Alterna llevando un codo hacia la rodilla opuesta mientras extiendes la otra pierna.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 20-30 repeticiones por lado.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">Elevación de Rodillas en Paralelas (Captain's Chair Leg Raise)</h2>
                <div id="exercise5" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, flexores de la cadera.</p>
                    <p><strong>Cómo hacerlo:</strong> Cuélgate en una silla romana o en paralelas, y eleva las rodillas hacia el pecho, concentrando el esfuerzo en el abdomen. Baja las piernas lentamente a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90 segundos entre series.</p>
                </div>
            </div>

            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise6')">Ab Wheel Rollout (Rodillo Abdominal)</h2>
                <div id="exercise6" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, transverso abdominal.</p>
                    <p><strong>Cómo hacerlo:</strong> Arrodíllate en el suelo y sostén el rodillo abdominal. Rueda hacia adelante hasta que el cuerpo esté extendido, luego vuelve a la posición inicial controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90 segundos entre series.</p>
                </div>
            </div>

            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise7')">Crunch Invertido (Reverse Crunch)</h2>
                <div id="exercise7" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, flexores de la cadera.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate boca arriba con las piernas elevadas y las rodillas flexionadas. Lleva las rodillas hacia el pecho mientras elevas las caderas del suelo. Baja las piernas controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 15-20 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise8')">Russian Twist</h2>
                <div id="exercise8" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Oblicuos.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en el suelo con las piernas ligeramente flexionadas y los pies apoyados. Sostén una pesa con ambas manos y gira el torso de un lado a otro, tocando el suelo con la pesa.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 20-30 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise9')">Plancha Lateral (Side Plank)</h2>
                <div id="exercise9" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Oblicuos, transverso abdominal.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate de lado con los pies juntos y apóyate en un antebrazo. Levanta las caderas hasta que el cuerpo forme una línea recta desde los pies hasta los hombros.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 30-60 segundos por lado.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise10')">Mountain Climbers</h2>
                <div id="exercise10" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Recto abdominal, transverso abdominal, oblicuos.</p>
                    <p><strong>Cómo hacerlo:</strong> Comienza en posición de plancha. Lleva una rodilla hacia el pecho y luego alterna con la otra pierna, manteniendo el ritmo rápido y constante.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 20-30 repeticiones por lado.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
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
