@extends('layouts.layout')

@section('title', 'Más Opciones: Espalda')

@section('content')
    <div class="container">
        <h1>Más Opciones: Ejercicios para la Espalda</h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos de la espalda.</p>

        <!-- Ejercicio 1: Dominadas (Pull-Ups) -->
        <div class="exercise-section">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise1')">1. Dominadas (Pull-Ups)</h2>
            <div id="exercise1" class="exercise-details">
                <p><strong>Máquina/Barra:</strong> Barra de dominadas.</p>
                <p><strong>Músculos Trabajados:</strong> Dorsales, bíceps, deltoides posterior, trapecio, romboides.</p>
                <p><strong>Cómo hacerlo:</strong> Agarra la barra con un agarre en pronación (palmas hacia adelante), con las manos a la altura de los hombros. Desde una posición colgante, tira de tu cuerpo hacia arriba hasta que la barbilla esté por encima de la barra. Baja controladamente.</p>
                <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
                <p><strong>Descanso:</strong> 90-120 segundos entre series.</p>
            </div>
        </div>

        <!-- Ejercicio 2: Remo con Barra (Barbell Row) -->
        <div class="exercise-section">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise2')">2. Remo con Barra (Barbell Row)</h2>
            <div id="exercise2" class="exercise-details">
                <p><strong>Máquina/Barra:</strong> Barra recta.</p>
                <p><strong>Músculos Trabajados:</strong> Dorsales, trapecio, romboides, deltoides posterior, bíceps.</p>
                <p><strong>Cómo hacerlo:</strong> Con las rodillas ligeramente flexionadas y el torso inclinado hacia adelante, sostén la barra con un agarre prono o supino. Tira de la barra hacia el abdomen mientras mantienes los codos cerca del cuerpo. Baja la barra controladamente.</p>
                <p><strong>Series/Repeticiones:</strong> 4 series de 8-10 repeticiones.</p>
                <p><strong>Descanso:</strong> 90 segundos entre series.</p>
            </div>
        </div>

        <!-- Ejercicio 3: Remo con Mancuernas (Dumbbell Row) -->
        <div class="exercise-section">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise3')">3. Remo con Mancuernas (Dumbbell Row)</h2>
            <div id="exercise3" class="exercise-details">
                <p><strong>Máquina/Barra:</strong> Mancuernas y banco plano.</p>
                <p><strong>Músculos Trabajados:</strong> Dorsales, romboides, trapecio, deltoides posterior, bíceps.</p>
                <p><strong>Cómo hacerlo:</strong> Coloca una rodilla y una mano en un banco plano, mientras sostienes una mancuerna con la otra mano. Tira de la mancuerna hacia el costado de tu torso, manteniendo el codo cerca del cuerpo. Baja controladamente.</p>
                <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones por lado.</p>
                <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
            </div>
        </div>

        <!-- Ejercicio 4: Peso Muerto (Deadlift) -->
        <div class="exercise-section">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise4')">4. Peso Muerto (Deadlift)</h2>
            <div id="exercise4" class="exercise-details">
                <p><strong>Máquina/Barra:</strong> Barra recta.</p>
                <p><strong>Músculos Trabajados:</strong> Erectores espinales, glúteos, isquiotibiales, cuádriceps, dorsales, trapecio.</p>
                <p><strong>Cómo hacerlo:</strong> Con los pies a la anchura de los hombros y la barra frente a ti, agáchate y agarra la barra con un agarre prono o mixto. Levanta la barra extendiendo las caderas y las rodillas hasta que estés completamente erguido. Baja la barra controladamente.</p>
                <p><strong>Series/Repeticiones:</strong> 4 series de 5-8 repeticiones.</p>
                <p><strong>Descanso:</strong> 2-3 minutos entre series.</p>
            </div>
        </div>

        <!-- Ejercicio 5: Remo en Cable (Cable Row) -->
        <div class="exercise-section">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">5. Remo en Cable (Cable Row)</h2>
            <div id="exercise5" class="exercise-details">
                <p><strong>Máquina/Barra:</strong> Máquina de remo sentado con cable.</p>
                <p><strong>Músculos Trabajados:</strong> Dorsales, trapecio, romboides, deltoides posterior, bíceps.</p>
                <p><strong>Cómo hacerlo:</strong> Siéntate en la máquina con los pies en la plataforma y las rodillas ligeramente flexionadas. Agarra las empuñaduras y tira hacia el torso, llevando los codos hacia atrás. Devuelve las empuñaduras controladamente a la posición inicial.</p>
                <p><strong>Series/Repeticiones:</strong> 4 series de 10-12 repeticiones.</p>
                <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
            </div>
        </div>

        <!-- Ejercicio 6: Remo con Máquina (Machine Row) -->
        <div class="exercise-section">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise6')">6. Remo con Máquina (Machine Row)</h2>
            <div id="exercise6" class="exercise-details">
                <p><strong>Máquina/Barra:</strong> Máquina de remo.</p>
                <p><strong>Músculos Trabajados:</strong> Dorsales, trapecio, romboides, deltoides posterior, bíceps.</p>
                <p><strong>Cómo hacerlo:</strong> Siéntate en la máquina con el pecho apoyado en la almohadilla. Agarra las empuñaduras y tira hacia ti, manteniendo los codos cerca del cuerpo. Devuelve las empuñaduras a la posición inicial de manera controlada.</p>
                <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
            </div>
        </div>

        <!-- Ejercicio 7: Jalón en Polea (Lat Pulldown) -->
        <div class="exercise-section">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise7')">7. Jalón en Polea (Lat Pulldown)</h2>
            <div id="exercise7" class="exercise-details">
                <p><strong>Máquina/Barra:</strong> Máquina de polea alta con barra.</p>
                <p><strong>Músculos Trabajados:</strong> Dorsales, trapecio, romboides, deltoides posterior, bíceps.</p>
                <p><strong>Cómo hacerlo:</strong> Siéntate en la máquina con las rodillas aseguradas bajo las almohadillas. Agarra la barra con un agarre en pronación, ligeramente más ancho que los hombros. Tira de la barra hacia la parte superior del pecho mientras llevas los codos hacia abajo y hacia atrás. Devuelve la barra controladamente.</p>
                <p><strong>Series/Repeticiones:</strong> 4 series de 10-12 repeticiones.</p>
                <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
            </div>
        </div>

        <!-- Ejercicio 8: Peso Muerto Rumano con Mancuernas (Romanian Deadlift with Dumbbells) -->
        <div class="exercise-section">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise8')">8. Peso Muerto Rumano con Mancuernas (Romanian Deadlift with Dumbbells)</h2>
            <div id="exercise8" class="exercise-details">
                <p><strong>Máquina/Barra:</strong> Mancuernas.</p>
                <p><strong>Músculos Trabajados:</strong> Isquiotibiales, glúteos, erectores espinales, dorsales.</p>
                <p><strong>Cómo hacerlo:</strong> Sostén una mancuerna en cada mano frente a tus muslos, con las rodillas ligeramente flexionadas. Mantén la espalda recta y baja las mancuernas mientras empujas las caderas hacia atrás. Levanta las mancuernas volviendo a la posición inicial.</p>
                <p><strong>Series/Repeticiones:</strong> 4 series de 8-10 repeticiones.</p>
                <p><strong>Descanso:</strong> 90-120 segundos entre series.</p>
            </div>
        </div>

        <!-- Ejercicio 9: Encogimientos de Hombros (Shrugs) -->
        <div class="exercise-section">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise9')">9. Encogimientos de Hombros (Shrugs)</h2>
            <div id="exercise9" class="exercise-details">
                <p><strong>Máquina/Barra:</strong> Barra recta o mancuernas.</p>
                <p><strong>Músculos Trabajados:</strong> Trapecio, deltoides.</p>
                <p><strong>Cómo hacerlo:</strong> Sostén una barra o mancuernas con los brazos extendidos a los lados. Encoge los hombros hacia arriba lo más alto posible sin mover los brazos. Baja los hombros de manera controlada.</p>
                <p><strong>Series/Repeticiones:</strong> 4 series de 12-15 repeticiones.</p>
                <p><strong>Descanso:</strong> 60 segundos entre series.</p>
            </div>
        </div>

        <!-- Ejercicio 10: Buenos Días (Good Mornings) -->
        <div class="exercise-section">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise10')">10. Buenos Días (Good Mornings)</h2>
            <div id="exercise10" class="exercise-details">
                <p><strong>Máquina/Barra:</strong> Barra recta.</p>
                <p><strong>Músculos Trabajados:</strong> Erectores espinales, glúteos, isquiotibiales.</p>
                <p><strong>Cómo hacerlo:</strong> Coloca la barra sobre los trapecios como en una sentadilla trasera. Con las rodillas ligeramente flexionadas, inclina el torso hacia adelante desde las caderas, manteniendo la espalda recta. Vuelve a la posición inicial empujando las caderas hacia adelante.</p>
                <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones.</p>
                <p><strong>Descanso:</strong> 90-120 segundos entre series.</p>
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

    <style>
        .exercise-section {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .exercise-header {
            cursor: pointer;
            background-color: #f8f8f8;
            padding: 10px;
            border-radius: 5px;
        }

        .exercise-details {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out;
        }
    </style>
@endsection