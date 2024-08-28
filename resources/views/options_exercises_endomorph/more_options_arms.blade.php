@extends('layouts.layout')

@section('title', 'Más Opciones: Ejercicios para los Brazos')

@section('content')
    <div class="container">
        <h1>Ejercicios para los Brazos</h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos de los brazos.</p>

        <div class="exercise-section">
            <!-- Ejercicio 1: Curl en Banco Inclinado con Mancuernas (Incline Dumbbell Curl) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise1')">Curl en Banco Inclinado con Mancuernas (Incline Dumbbell Curl)</h2>
                <div id="exercise1" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas y banco inclinado.</p>
                    <p><strong>Músculos Trabajados:</strong> Bíceps braquial, braquial anterior.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en un banco inclinado a 45 grados, con una mancuerna en cada mano. Mantén los brazos colgando rectos hacia abajo y realiza un curl, levantando las mancuernas hacia los hombros. Baja las mancuernas de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 2: Curl en Martillo con Cuerda en Polea (Rope Hammer Curl) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise2')">Curl en Martillo con Cuerda en Polea (Rope Hammer Curl)</h2>
                <div id="exercise2" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de polea baja con cuerda.</p>
                    <p><strong>Músculos Trabajados:</strong> Bíceps braquial, braquiorradial.</p>
                    <p><strong>Cómo hacerlo:</strong> Conecta una cuerda a la polea baja, sostén la cuerda con un agarre neutro (palmas enfrentadas) y realiza el curl llevando las manos hacia los hombros, manteniendo el agarre neutro. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 10-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 3: Curl Concentrado en Banco Scott con Barra EZ (Preacher Curl with EZ Bar) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise3')">Curl Concentrado en Banco Scott con Barra EZ (Preacher Curl with EZ Bar)</h2>
                <div id="exercise3" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Banco Scott y barra EZ.</p>
                    <p><strong>Músculos Trabajados:</strong> Bíceps braquial, braquial anterior.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en el banco Scott, coloca los brazos sobre la almohadilla y sostén la barra EZ con las palmas hacia arriba. Realiza el curl hasta que la barra esté cerca de los hombros y baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-10 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 4: Curl de Arrastre (Drag Curl) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise4')">Curl de Arrastre (Drag Curl)</h2>
                <div id="exercise4" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta o EZ.</p>
                    <p><strong>Músculos Trabajados:</strong> Bíceps braquial, braquial anterior, deltoides anterior.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén la barra con un agarre más ancho que los hombros. Mientras realizas el curl, arrastra la barra hacia arriba, manteniendo los codos hacia atrás y cerca del torso. Devuelve la barra a la posición inicial siguiendo la misma línea.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 5: Curl de Concentración en Polea Baja (Cable Concentration Curl) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">Curl de Concentración en Polea Baja (Cable Concentration Curl)</h2>
                <div id="exercise5" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de polea baja.</p>
                    <p><strong>Músculos Trabajados:</strong> Bíceps braquial.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en un banco frente a una polea baja. Sostén la empuñadura de la polea con una mano, apoya el codo en la parte interna del muslo y realiza un curl, llevando la empuñadura hacia el hombro. Baja de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 12-15 repeticiones por brazo.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 6: Extensión de Tríceps con Cuerda en Polea Alta (Overhead Rope Tricep Extension) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise6')">Extensión de Tríceps con Cuerda en Polea Alta (Overhead Rope Tricep Extension)</h2>
                <div id="exercise6" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de polea alta con cuerda.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps (cabeza larga, lateral y medial).</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca la cuerda en la polea alta, sosténla con ambas manos y da un paso hacia adelante. Inclínate ligeramente hacia adelante y estira los brazos por encima de la cabeza. Flexiona los codos para bajar la cuerda detrás de la cabeza y luego extiende los brazos.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 7: Extensión de Tríceps con Barra en Polea Alta (Straight Bar Tricep Extension) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise7')">Extensión de Tríceps con Barra en Polea Alta (Straight Bar Tricep Extension)</h2>
                <div id="exercise7" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de polea alta con barra recta.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps (cabeza larga, lateral y medial).</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca una barra recta en la polea alta, sosténla con ambas manos y empuja hacia abajo hasta que los brazos estén completamente extendidos. Flexiona los codos para regresar la barra a la posición inicial de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 8: Extensión de Tríceps Unilateral en Polea Baja (Single Arm Tricep Extension) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise8')">Extensión de Tríceps Unilateral en Polea Baja (Single Arm Tricep Extension)</h2>
                <div id="exercise8" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de polea baja.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps (cabeza larga, lateral y medial).</p>
                    <p><strong>Cómo hacerlo:</strong> Ajusta la polea a la altura de los hombros, sostén la empuñadura con una mano, y extiende el brazo completamente hacia abajo. Vuelve a la posición inicial de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 3 series de 12-15 repeticiones por brazo.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 9: Extensión de Tríceps con Mancuerna en Banco Inclinado (Incline Dumbbell Tricep Extension) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise9')">Extensión de Tríceps con Mancuerna en Banco Inclinado (Incline Dumbbell Tricep Extension)</h2>
                <div id="exercise9" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas y banco inclinado.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps (cabeza larga).</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate en un banco inclinado a 30-45 grados, sostén una mancuerna en cada mano por encima de la cabeza. Flexiona los codos para bajar las mancuernas detrás de la cabeza, y luego extiende los brazos hacia arriba.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 10: Press Cerrado con Barra (Close-Grip Bench Press) -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise10')">Press Cerrado con Barra (Close-Grip Bench Press)</h2>
                <div id="exercise10" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta y banco plano.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps, pectoral mayor, deltoides anterior.</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate en un banco plano, sostén la barra con un agarre cerrado (manos más cerca del ancho de los hombros). Baja la barra hacia el pecho manteniendo los codos cerca del cuerpo y luego empuja hacia arriba.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 6-10 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90 segundos entre series.</p>
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
