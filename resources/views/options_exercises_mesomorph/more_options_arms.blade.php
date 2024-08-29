@extends('layouts.layout')

@section('title', 'Más Opciones: Ejercicios para los Brazos')

@section('content')
    <div class="container">
        <h1>Más Opciones: Ejercicios para los Brazos</h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos de los brazos.</p>

        <div class="exercise-section">
            <!-- Ejercicio 1: Curl con Barra (Barbell Curl) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise1')">Curl con Barra (Barbell Curl)</h2>
                <div id="exercise1" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Bíceps.</p>
                    <p><strong>Cómo hacerlo:</strong> De pie, sostén una barra con un agarre supino (palmas hacia arriba), con las manos separadas al ancho de los hombros. Flexiona los codos para levantar la barra hacia los hombros, manteniendo los codos cerca del torso. Baja la barra de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 2: Curl con Mancuernas (Dumbbell Curl) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise2')">Curl con Mancuernas (Dumbbell Curl)</h2>
                <div id="exercise2" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Bíceps.</p>
                    <p><strong>Cómo hacerlo:</strong> De pie, sostén una mancuerna en cada mano con un agarre supino. Flexiona los codos para levantar las mancuernas hacia los hombros, manteniendo los codos cerca del torso. Baja las mancuernas de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 3: Curl en Predicador (Preacher Curl) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise3')">Curl en Predicador (Preacher Curl)</h2>
                <div id="exercise3" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Bíceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en un banco predicador y coloca los brazos sobre el soporte. Sostén una barra o mancuerna y flexiona los codos para levantar el peso hacia los hombros. Baja el peso controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 4: Curl Concentrado (Concentration Curl) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise4')">Curl Concentrado (Concentration Curl)</h2>
                <div id="exercise4" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Bíceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en un banco y apoya el codo en la parte interior del muslo. Sostén una mancuerna con la mano en un agarre supino y flexiona el codo para levantar la mancuerna hacia el hombro. Baja el peso de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 12-15 repeticiones por brazo.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 5: Curl Martillo (Hammer Curl) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">Curl Martillo (Hammer Curl)</h2>
                <div id="exercise5" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Bíceps, braquiorradial.</p>
                    <p><strong>Cómo hacerlo:</strong> De pie, sostén una mancuerna en cada mano con un agarre neutro (palmas hacia adentro). Flexiona los codos para levantar las mancuernas hacia los hombros, manteniendo los codos cerca del torso. Baja las mancuernas de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 6: Press Francés (Triceps Extension) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise6')">Press Francés (Triceps Extension)</h2>
                <div id="exercise6" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Acostado en un banco plano, sostén una barra EZ con las manos en un agarre estrecho. Baja la barra hacia la frente flexionando los codos, y luego extiende los brazos para volver a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 7: Fondos en Paralelas (Dips) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise7')">Fondos en Paralelas (Dips)</h2>
                <div id="exercise7" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Tríceps, pecho.</p>
                    <p><strong>Cómo hacerlo:</strong> Colócate entre dos barras paralelas y baja el cuerpo flexionando los codos, manteniendo el torso ligeramente inclinado hacia adelante. Luego, extiende los brazos para volver a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 8: Extensión de Tríceps en Polea (Tricep Pushdown) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise8')">Extensión de Tríceps en Polea (Tricep Pushdown)</h2>
                <div id="exercise8" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Colócate frente a una polea alta con una barra o cuerda acoplada. Empuja la barra hacia abajo hasta que los brazos estén completamente extendidos. Controla el movimiento mientras regresas a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 9: Extensión de Tríceps por Encima de la Cabeza (Overhead Triceps Extension) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise9')">Extensión de Tríceps por Encima de la Cabeza (Overhead Triceps Extension)</h2>
                <div id="exercise9" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén una mancuerna con ambas manos por encima de la cabeza. Baja la mancuerna detrás de la cabeza flexionando los codos, luego extiende los brazos para volver a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 10: Curl Inverso (Reverse Curl) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise10')">Curl Inverso (Reverse Curl)</h2>
                <div id="exercise10" class="exercise-details">
                    <p><strong>Músculos Trabajados:</strong> Bíceps, braquiorradial.</p>
                    <p><strong>Cómo hacerlo:</strong> De pie, sostén una barra con un agarre en pronación (palmas hacia abajo). Flexiona los codos para levantar la barra hacia los hombros, manteniendo los codos cerca del torso. Baja la barra de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
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
