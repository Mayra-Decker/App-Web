@extends('layouts.layout')

@section('title', 'Más Opciones: Ejercicios para el Pecho y Tríceps')

@section('content')
    <div class="container">
        <h1>Más Opciones: Ejercicios para el Pecho y Tríceps</h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos del pecho y tríceps.</p>

        <div class="exercise-section">
            <!-- Ejercicio 1: Press de Pecho con Barra en Banco Plano (Flat Barbell Bench Press) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise1')">Press de Pecho con Barra en Banco Plano (Flat Barbell Bench Press)</h2>
                <div id="exercise1" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta y banco plano.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor, deltoides anterior, tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate en un banco plano, agarra la barra con un agarre más ancho que los hombros, baja la barra hasta el pecho y empuja hacia arriba.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 6-10 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 2: Press de Pecho con Mancuernas en Banco Plano (Flat Dumbbell Bench Press) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise2')">Press de Pecho con Mancuernas en Banco Plano (Flat Dumbbell Bench Press)</h2>
                <div id="exercise2" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas y banco plano.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor, deltoides anterior, tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate en un banco plano, sostén una mancuerna en cada mano, baja controladamente hasta el pecho y empuja hacia arriba.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 3: Press de Pecho Inclinado con Barra (Incline Barbell Bench Press) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise3')">Press de Pecho Inclinado con Barra (Incline Barbell Bench Press)</h2>
                <div id="exercise3" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta y banco inclinado.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor (parte superior), deltoides anterior, tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate en un banco inclinado a 30-45 grados, baja la barra hasta la parte superior del pecho y empuja hacia arriba.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 6-10 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 4: Aperturas con Mancuernas en Banco Plano (Flat Dumbbell Flyes) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise4')">Aperturas con Mancuernas en Banco Plano (Flat Dumbbell Flyes)</h2>
                <div id="exercise4" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas y banco plano.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor, deltoides anterior.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate en un banco plano, abre los brazos con las mancuernas hasta que estén a la altura del pecho y luego vuelve a juntar las mancuernas.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 5: Fondos en Paralelas (Dips) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">Fondos en Paralelas (Dips)</h2>
                <div id="exercise5" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barras paralelas.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor (parte inferior), tríceps, deltoides anterior.</p>
                    <p><strong>Cómo hacerlo:</strong> Sujétate en las barras paralelas, baja el cuerpo hasta que los codos estén a 90 grados y luego empuja hacia arriba.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 6: Extensión de Tríceps en Polea (Tricep Pushdown) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise6')">Extensión de Tríceps en Polea (Tricep Pushdown)</h2>
                <div id="exercise6" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de polea alta.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps (cabeza larga, lateral y medial).</p>
                    <p><strong>Cómo hacerlo:</strong> Sujeta la barra en la polea alta con las palmas hacia abajo, empuja hacia abajo hasta extender completamente los brazos, y regresa a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 7: Press Francés con Barra (Skull Crushers) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise7')">Press Francés con Barra (Skull Crushers)</h2>
                <div id="exercise7" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra EZ o recta y banco plano.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps (cabeza larga, lateral y medial).</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate en un banco plano, sostén la barra con las manos a la altura de los hombros, baja la barra controladamente hacia la frente y luego extiende los brazos hacia arriba.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 8: Patada de Tríceps con Mancuerna (Tricep Kickback) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise8')">Patada de Tríceps con Mancuerna (Tricep Kickback)</h2>
                <div id="exercise8" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps (cabeza larga, lateral y medial).</p>
                    <p><strong>Cómo hacerlo:</strong> Inclínate hacia adelante, con una mancuerna en la mano, extiende el brazo hacia atrás hasta que esté completamente recto, y luego vuelve a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 12-15 repeticiones por brazo.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 9: Fondos en Banco (Bench Dips) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise9')">Fondos en Banco (Bench Dips)</h2>
                <div id="exercise9" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Banco o caja.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps, pectoral mayor (parte inferior), deltoides anterior.</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca las manos en el borde de un banco y los pies en otro banco o en el suelo, baja el cuerpo flexionando los codos, y luego empuja hacia arriba.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 10: Press de Tríceps con Mancuernas (Dumbbell Triceps Press) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise10')">Press de Tríceps con Mancuernas (Dumbbell Triceps Press)</h2>
                <div id="exercise10" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps (cabeza larga, lateral y medial).</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén una mancuerna con ambas manos sobre la cabeza, baja la mancuerna detrás de la cabeza flexionando los codos y luego extiende los brazos hacia arriba.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 10-12 repeticiones.</p>
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
