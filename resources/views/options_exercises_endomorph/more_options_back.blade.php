@extends('layouts.layout')

@section('title', 'Más Opciones: Ejercicios para Espalda y Tríceps')

@section('content')
    <div class="container">
        <h1>Más Opciones: Ejercicios para Espalda y Tríceps</h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos de la espalda y los tríceps.</p>

        <div class="exercise-section">
            <!-- Ejercicio 1: Dominadas (Pull-Ups) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise1')">Dominadas (Pull-Ups)</h2>
                <div id="exercise1" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra de dominadas.</p>
                    <p><strong>Músculos Trabajados:</strong> Dorsales, bíceps, deltoides posterior, trapecio, romboides.</p>
                    <p><strong>Cómo hacerlo:</strong> Agarra la barra con un agarre en pronación (palmas hacia adelante), con las manos a la altura de los hombros. Desde una posición colgante, tira de tu cuerpo hacia arriba hasta que la barbilla esté por encima de la barra. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90-120 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 2: Remo con Barra (Barbell Row) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise2')">Remo con Barra (Barbell Row)</h2>
                <div id="exercise2" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta.</p>
                    <p><strong>Músculos Trabajados:</strong> Dorsales, trapecio, romboides, deltoides posterior, bíceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Con las rodillas ligeramente flexionadas y el torso inclinado hacia adelante, sostén la barra con un agarre prono o supino. Tira de la barra hacia el abdomen mientras mantienes los codos cerca del cuerpo. Baja la barra controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-10 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 3: Remo con Mancuernas (Dumbbell Row) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise3')">Remo con Mancuernas (Dumbbell Row)</h2>
                <div id="exercise3" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas y banco plano.</p>
                    <p><strong>Músculos Trabajados:</strong> Dorsales, romboides, trapecio, deltoides posterior, bíceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca una rodilla y una mano en un banco plano, mientras sostienes una mancuerna con la otra mano. Tira de la mancuerna hacia el costado de tu torso, manteniendo el codo cerca del cuerpo. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones por lado.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 4: Jalón en Polea (Lat Pulldown) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise4')">Jalón en Polea (Lat Pulldown)</h2>
                <div id="exercise4" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de polea alta con barra.</p>
                    <p><strong>Músculos Trabajados:</strong> Dorsales, trapecio, romboides, deltoides posterior, bíceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en la máquina con las rodillas aseguradas bajo las almohadillas. Agarra la barra con un agarre en pronación, ligeramente más ancho que los hombros. Tira de la barra hacia la parte superior del pecho mientras llevas los codos hacia abajo y hacia atrás. Devuelve la barra controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 10-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 5: Peso Muerto (Deadlift) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">Peso Muerto (Deadlift)</h2>
                <div id="exercise5" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta.</p>
                    <p><strong>Músculos Trabajados:</strong> Erectores espinales, glúteos, isquiotibiales, cuádriceps, dorsales, trapecio.</p>
                    <p><strong>Cómo hacerlo:</strong> Con los pies a la anchura de los hombros y la barra frente a ti, agáchate y agarra la barra con un agarre prono o mixto. Levanta la barra extendiendo las caderas y las rodillas hasta que estés completamente erguido. Baja la barra controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 5-8 repeticiones.</p>
                    <p><strong>Descanso:</strong> 2-3 minutos entre series.</p>
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
