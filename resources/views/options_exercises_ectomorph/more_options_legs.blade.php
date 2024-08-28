@extends('layouts.layout')

@section('title', 'Ejercicios para Piernas Avanzada')

@section('content')
    <div class="container">
        <h1>Ejercicios para Piernas Avanzadas</h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos de las piernas.</p>

        <div class="exercise-section">
            <!-- Ejercicio 1: Sentadillas -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise1')">Sentadillas (Squats)</h2>
                <div id="exercise1" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta o mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Cuádriceps, glúteos, isquiotibiales, erectores espinales.</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca la barra sobre los trapecios o sostén una mancuerna en cada mano. Baja el cuerpo doblando las rodillas y las caderas, manteniendo la espalda recta, hasta que los muslos estén paralelos al suelo. Empuja hacia arriba para volver a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90-120 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 2: Prensa de Piernas -->
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

            <!-- Ejercicio 3: Peso Muerto Rumano -->
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

            <!-- Ejercicio 4: Estocadas -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise4')">Estocadas (Lunges)</h2>
                <div id="exercise4" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas o barra recta.</p>
                    <p><strong>Músculos Trabajados:</strong> Cuádriceps, glúteos, isquiotibiales.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén una mancuerna en cada mano o coloca una barra sobre los trapecios. Da un paso hacia adelante con una pierna, bajando el cuerpo hasta que ambas rodillas estén a 90 grados. Empuja hacia atrás para regresar a la posición inicial y repite con la otra pierna.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones por pierna.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 5: Sentadillas Búlgaras -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">Sentadillas Búlgaras (Bulgarian Split Squat)</h2>
                <div id="exercise5" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas o barra recta.</p>
                    <p><strong>Músculos Trabajados:</strong> Cuádriceps, glúteos, isquiotibiales.</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca el pie trasero sobre un banco, sostén una mancuerna en cada mano o usa una barra sobre los hombros. Baja el cuerpo con la pierna delantera hasta que la rodilla esté a 90 grados. Empuja hacia arriba para volver a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones por pierna.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 6: Curl de Piernas -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise6')">Curl de Piernas (Leg Curl)</h2>
                <div id="exercise6" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de curl de piernas (sentado o acostado).</p>
                    <p><strong>Músculos Trabajados:</strong> Isquiotibiales.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate o acuéstate en la máquina, con los tobillos asegurados bajo la almohadilla. Flexiona las rodillas para llevar los tobillos hacia los glúteos, y luego vuelve controladamente a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 7: Extensión de Piernas -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise7')">Extensión de Piernas (Leg Extension)</h2>
                <div id="exercise7" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de extensión de piernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Cuádriceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en la máquina con los tobillos asegurados bajo la almohadilla. Extiende las rodillas para levantar la almohadilla, contrayendo los cuádriceps. Vuelve controladamente a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 10-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 8: Sentadillas en Máquina Smith -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise8')">Sentadillas en Máquina Smith (Smith Machine Squat)</h2>
                <div id="exercise8" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina Smith.</p>
                    <p><strong>Músculos Trabajados:</strong> Cuádriceps, glúteos, isquiotibiales.</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca un banco plano bajo la barra de la máquina Smith. Sostén la barra con un agarre prono. Mientras empujas la barra hacia arriba, gira las muñecas para que las palmas se enfrenten al final del movimiento. Vuelve a la posición inicial girando las muñecas de nuevo.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 9: Abducción de Cadera -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise9')">Abducción de Cadera (Hip Abduction)</h2>
                <div id="exercise9" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de abducción de cadera.</p>
                    <p><strong>Músculos Trabajados:</strong> Glúteos medios y menores, tensor de la fascia lata.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en la máquina con las piernas aseguradas en las almohadillas. Empuja las piernas hacia afuera, separándolas lo más posible, y luego vuelve a la posición inicial controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 10: Adducción de Cadera -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise10')">Adducción de Cadera (Hip Adduction)</h2>
                <div id="exercise10" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de aducción de cadera.</p>
                    <p><strong>Músculos Trabajados:</strong> Aductores (músculos internos del muslo).</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en la máquina con las piernas abiertas y los muslos apoyados en las almohadillas. Junta las piernas contrayendo los aductores, luego vuelve a la posición inicial controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 11: Peso Muerto Sumo -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise11')">Peso Muerto Sumo (Sumo Deadlift)</h2>
                <div id="exercise11" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta.</p>
                    <p><strong>Músculos Trabajados:</strong> Glúteos, isquiotibiales, cuádriceps, aductores, erectores espinales.</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca los pies más anchos que el ancho de los hombros, con los dedos apuntando hacia afuera. Agarra la barra con un agarre prono o mixto. Levanta la barra extendiendo las caderas y las rodillas hasta que estés completamente erguido. Baja la barra controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 5-8 repeticiones.</p>
                    <p><strong>Descanso:</strong> 2-3 minutos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 12: Elevación de Talones -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise12')">Elevación de Talones (Calf Raises)</h2>
                <div id="exercise12" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de elevación de talones, barra recta o mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Sóleo, gastrocnemio (músculos de la pantorrilla).</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca la punta de los pies en el borde de una plataforma o máquina de elevación de talones. Levanta los talones lo más alto posible, contrayendo los músculos de la pantorrilla, y luego baja los talones controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 15-20 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 13: Sentadilla Frontal -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise13')">Sentadilla Frontal (Front Squat)</h2>
                <div id="exercise13" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta.</p>
                    <p><strong>Músculos Trabajados:</strong> Cuádriceps, glúteos, isquiotibiales, erectores espinales.</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca la barra en la parte frontal de los hombros, cruzando los brazos sobre la barra o usando un agarre de clean. Baja el cuerpo doblando las rodillas y las caderas, manteniendo la espalda recta, hasta que los muslos estén paralelos al suelo. Empuja hacia arriba para volver a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-10 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90-120 segundos entre series.</p>
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
                <li><strong>Calentamiento:</strong> Realiza un calentamiento de 5-10 minutos antes de comenzar, que incluya movilidad articular y cardio ligero.</li>
                <li><strong>Progresión:</strong> Aumenta gradualmente el peso para seguir desafiando los músculos, pero mantén siempre una técnica adecuada para evitar lesiones.</li>
                <li><strong>Variación:</strong> Cambia los ejercicios cada 4-6 semanas para mantener la efectividad y evitar el estancamiento.</li>
            </ul>
        </div>
    </div>
@endsection
