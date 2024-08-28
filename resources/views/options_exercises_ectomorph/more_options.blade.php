@extends('layouts.layout')

@section('title', 'Ejercicios para el Pecho')

@section('content')
    <div class="container">
        <h1>Ejercicios para el Pecho</h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos del pecho.</p>

        <div class="exercise-section">
            <!-- Ejercicio 1: Press de Banca con Agarre Invertido -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise1')">Press de Banca con Agarre Invertido (Reverse Grip Bench Press)</h2>
                <div id="exercise1" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta y banco plano.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor (especialmente la parte superior), deltoides anterior, tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate en un banco plano y sostén la barra con un agarre supino (palmas hacia arriba), un poco más ancho que el ancho de los hombros. Baja la barra hacia la parte superior del pecho y luego empuja hacia arriba.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 2: Press de Banca con Pesas Rusas -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise2')">Press de Banca con Pesas Rusas (Kettlebell Bench Press)</h2>
                <div id="exercise2" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Pesas rusas (kettlebells) y banco plano.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor, deltoides anterior, tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate en un banco plano y sostén una pesa rusa en cada mano. Realiza un press como con mancuernas, pero la inestabilidad de las pesas rusas activa más los músculos estabilizadores.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 3: Press de Pecho en TRX -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise3')">Press de Pecho en TRX (TRX Chest Press)</h2>
                <div id="exercise3" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Sistema de entrenamiento en suspensión (TRX).</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor, deltoides anterior, tríceps, core.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén las manijas del TRX con los brazos extendidos frente a ti y el cuerpo inclinado hacia adelante. Baja el cuerpo doblando los codos, manteniendo el cuerpo recto, y luego empuja hacia arriba para regresar a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 4: Flexiones en Anillas -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise4')">Flexiones en Anillas (Ring Push-Ups)</h2>
                <div id="exercise4" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Anillas de gimnasia.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor, deltoides anterior, tríceps, core.</p>
                    <p><strong>Cómo hacerlo:</strong> Colócate en posición de flexión con las manos en las anillas. Realiza una flexión tradicional, pero la inestabilidad de las anillas activa más los músculos estabilizadores del pecho y el core.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 5: Press de Pecho en Máquinas Convergentes -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">Press de Pecho en Máquinas Convergentes (Converging Chest Press Machine)</h2>
                <div id="exercise5" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de press convergente.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor, deltoides anterior, tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en la máquina con las manijas a los lados del pecho. Empuja las manijas hacia adelante y ligeramente hacia adentro, enfocando el trabajo en el pecho.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 6: Press de Pecho con Mancuernas en Banco Declinado con Giro -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise6')">Press de Pecho con Mancuernas en Banco Declinado con Giro (Decline Dumbbell Twist Press)</h2>
                <div id="exercise6" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas y banco declinado.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor, deltoides anterior, tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate en un banco declinado, sostén una mancuerna en cada mano. Realiza un press de pecho y mientras empujas las mancuernas hacia arriba, gira las muñecas para que las palmas se enfrenten. Vuelve a la posición inicial de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 7: Press de Pecho con Banda de Resistencia y Mancuernas -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise7')">Press de Pecho con Banda de Resistencia y Mancuernas</h2>
                <div id="exercise7" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Bandas de resistencia y mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor, deltoides anterior, tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Envuelve una banda de resistencia alrededor de la espalda y sostenla con las manos junto con las mancuernas. Realiza un press de pecho normal, sintiendo cómo la resistencia aumenta a medida que extiendes los brazos.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 8: Press de Pecho con Mancuernas Alterno en Banco Plano -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise8')">Press de Pecho con Mancuernas Alterno en Banco Plano (Alternating Dumbbell Chest Press)</h2>
                <div id="exercise8" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas y banco plano.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor, deltoides anterior, tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate en un banco plano, sostén una mancuerna en cada mano. Empuja una mancuerna hacia arriba mientras la otra permanece en la posición inicial. Alterna los brazos con cada repetición.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 10-12 repeticiones por brazo.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 9: Flexiones con Desplazamiento Lateral -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise9')">Flexiones con Desplazamiento Lateral (Moving Push-Ups)</h2>
                <div id="exercise9" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Ninguna (calistenia).</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor, deltoides anterior, tríceps, core.</p>
                    <p><strong>Cómo hacerlo:</strong> Comienza en posición de flexión, realiza una flexión y luego desplaza el cuerpo lateralmente con un pequeño salto o caminando con las manos y los pies. Repite el movimiento hacia el otro lado.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones por lado.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 10: Press de Pecho en Máquina Smith con Giro -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise10')">Press de Pecho en Máquina Smith con Giro (Twist Smith Machine Chest Press)</h2>
                <div id="exercise10" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina Smith.</p>
                    <p><strong>Músculos Trabajados:</strong> Pectoral mayor, deltoides anterior, tríceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca un banco plano bajo la barra de la máquina Smith. Sostén la barra con un agarre prono. Mientras empujas la barra hacia arriba, gira las muñecas para que las palmas se enfrenten al final del movimiento. Vuelve a la posición inicial girando las muñecas de nuevo.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
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
