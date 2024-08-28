@extends('layouts.layout')

@section('title', 'Ejercicios para Brazos Avanzado')

@section('content')
    <div class="container">
        <h1>Ejercicios para Brazos Avanzados</h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos de los brazos (bíceps y tríceps).</p>

        <div class="exercise-section">
            <!-- Ejercicio 1: Curl con Barra -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise1')">Curl con Barra (Barbell Curl)</h2>
                <div id="exercise1" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta.</p>
                    <p><strong>Músculos Trabajados:</strong> Bíceps braquial, braquial anterior, braquiorradial.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén la barra con las manos a la anchura de los hombros, con las palmas hacia arriba. Flexiona los codos para llevar la barra hacia los hombros, manteniendo los codos pegados al torso. Baja la barra controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 2: Curl con Mancuernas -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise2')">Curl con Mancuernas (Dumbbell Curl)</h2>
                <div id="exercise2" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Bíceps braquial, braquial anterior, braquiorradial.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén una mancuerna en cada mano con las palmas hacia arriba. Flexiona los codos para llevar las mancuernas hacia los hombros, y luego baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 10-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 3: Curl en Predicador -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise3')">Curl en Predicador (Preacher Curl)</h2>
                <div id="exercise3" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Banco predicador y barra EZ o mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Bíceps braquial, braquial anterior.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en el banco predicador, coloca los brazos sobre la almohadilla y sostén la barra EZ con las palmas hacia arriba. Realiza el curl hasta que la barra esté cerca de los hombros y baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 4: Curl Concentrado -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise4')">Curl Concentrado (Concentration Curl)</h2>
                <div id="exercise4" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Bíceps braquial.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en un banco, inclínate ligeramente hacia adelante y apoya el codo de un brazo en la parte interna del muslo. Flexiona el brazo para llevar la mancuerna hacia el hombro, y baja de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones por brazo.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 5: Curl Martillo -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">Curl Martillo (Hammer Curl)</h2>
                <div id="exercise5" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Bíceps braquial, braquiorradial.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén una mancuerna en cada mano con las palmas mirando hacia adentro (agarre neutro). Flexiona los codos para llevar las mancuernas hacia los hombros, manteniendo el agarre neutro. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 10-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 6: Press Francés -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise6')">Press Francés (Triceps Extension)</h2>
                <div id="exercise6" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra EZ o mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps (cabeza larga, lateral y medial).</p>
                    <p><strong>Cómo hacerlo:</strong> Acuéstate en un banco plano, sostén la barra o las mancuernas con las manos a la altura de los hombros, baja el peso controladamente hacia la frente y luego extiende los brazos hacia arriba.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 7: Fondos en Paralelas -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise7')">Fondos en Paralelas (Dips)</h2>
                <div id="exercise7" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barras paralelas.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps, pectoral mayor, deltoides anterior.</p>
                    <p><strong>Cómo hacerlo:</strong> Sube a las barras paralelas y baja el cuerpo flexionando los codos hasta que los brazos estén a 90 grados. Luego empuja hacia arriba hasta extender los brazos.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 8: Extensión de Tríceps en Polea -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise8')">Extensión de Tríceps en Polea (Tricep Pushdown)</h2>
                <div id="exercise8" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de polea alta.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps (cabeza larga, lateral y medial).</p>
                    <p><strong>Cómo hacerlo:</strong> Sujeta la barra o cuerda en la polea alta con las palmas hacia abajo. Empuja hacia abajo hasta extender completamente los brazos, y regresa a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 9: Extensión de Tríceps por Encima de la Cabeza -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise9')">Extensión de Tríceps por Encima de la Cabeza (Overhead Triceps Extension)</h2>
                <div id="exercise9" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas, barra EZ o cuerda en polea alta.</p>
                    <p><strong>Músculos Trabajados:</strong> Tríceps (cabeza larga).</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén una mancuerna, barra EZ, o cuerda con ambas manos por encima de la cabeza. Flexiona los codos para bajar el peso detrás de la cabeza, y luego extiende los brazos hacia arriba.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 10: Curl Inverso -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise10')">Curl Inverso (Reverse Curl)</h2>
                <div id="exercise10" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta o EZ.</p>
                    <p><strong>Músculos Trabajados:</strong> Braquiorradial, bíceps braquial.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén la barra con las palmas hacia abajo (agarre prono). Flexiona los codos para llevar la barra hacia los hombros, manteniendo los codos cerca del torso. Baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 11: Curl de Muñeca -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise11')">Curl de Muñeca (Wrist Curl)</h2>
                <div id="exercise11" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta o mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Flexores del antebrazo.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén la barra o mancuernas con las palmas hacia arriba. Apoya los antebrazos en un banco o tus muslos, permitiendo que las muñecas cuelguen. Flexiona las muñecas para levantar el peso, y luego baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 12: Extensión de Muñeca -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise12')">Extensión de Muñeca (Reverse Wrist Curl)</h2>
                <div id="exercise12" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta o mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Extensores del antebrazo.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén la barra o mancuernas con las palmas hacia abajo. Apoya los antebrazos en un banco o tus muslos, permitiendo que las muñecas cuelguen. Extiende las muñecas para levantar el peso, y luego baja controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 12-15 repeticiones.</p>
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

        <div class="tips-section">
            <h2>Consejos Adicionales</h2>
            <ul>
                <li><strong>Calentamiento:</strong> Realiza un calentamiento específico para los brazos antes de comenzar, como rotaciones de muñeca, flexiones ligeras y movimientos de brazo para preparar los músculos y articulaciones.</li>
                <li><strong>Progresión:</strong> Incrementa gradualmente el peso a medida que te sientas más fuerte, asegurando siempre una técnica adecuada para evitar lesiones.</li>
                <li><strong>Variedad:</strong> Cambia los ejercicios cada 4-6 semanas para mantener la efectividad y continuar progresando.</li>
            </ul>
        </div>
    </div>
@endsection
