@extends('layouts.layout')

@section('title', 'Más Opciones: Ejercicios para la Espalda')

@section('content')
    <div class="container">
        <h1>Más Opciones: Ejercicios para la Espalda</h1>
        <p>Aquí encontrarás ejercicios adicionales para trabajar y desarrollar los músculos de la espalda.</p>

        <div class="exercise-section">
            <!-- Ejercicio 1: Dominadas -->
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

            <!-- Ejercicio 2: Remo con Barra -->
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

            <!-- Ejercicio 3: Remo con Mancuernas -->
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

            <!-- Ejercicio 4: Jalón en Polea -->
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

            <!-- Ejercicio 5: Remo en Polea -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise5')">Remo en Polea (Seated Cable Row)</h2>
                <div id="exercise5" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de remo sentado con cable.</p>
                    <p><strong>Músculos Trabajados:</strong> Dorsales, trapecio, romboides, deltoides posterior, bíceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Siéntate en la máquina con los pies en la plataforma y las rodillas ligeramente flexionadas. Agarra las empuñaduras y tira hacia el torso, llevando los codos hacia atrás. Devuelve las empuñaduras controladamente a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 10-12 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 6: Peso Muerto -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise6')">Peso Muerto (Deadlift)</h2>
                <div id="exercise6" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta.</p>
                    <p><strong>Músculos Trabajados:</strong> Erectores espinales, glúteos, isquiotibiales, cuádriceps, dorsales, trapecio.</p>
                    <p><strong>Cómo hacerlo:</strong> Con los pies a la anchura de los hombros y la barra frente a ti, agáchate y agarra la barra con un agarre prono o mixto. Levanta la barra extendiendo las caderas y las rodillas hasta que estés completamente erguido. Baja la barra controladamente.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 5-8 repeticiones.</p>
                    <p><strong>Descanso:</strong> 2-3 minutos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 7: Peso Muerto Rumano con Mancuernas -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise7')">Peso Muerto Rumano con Mancuernas (Romanian Deadlift with Dumbbells)</h2>
                <div id="exercise7" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Mancuernas.</p>
                    <p><strong>Músculos Trabajados:</strong> Isquiotibiales, glúteos, erectores espinales, dorsales.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén una mancuerna en cada mano frente a tus muslos, con las rodillas ligeramente flexionadas. Mantén la espalda recta y baja las mancuernas mientras empujas las caderas hacia atrás. Levanta las mancuernas volviendo a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-10 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90-120 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 8: Remo en Máquina T-Bar -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise8')">Remo en Máquina T-Bar (T-Bar Row)</h2>
                <div id="exercise8" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina T-Bar o barra con soporte en un rincón.</p>
                    <p><strong>Músculos Trabajados:</strong> Dorsales, romboides, trapecio, deltoides posterior, bíceps.</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca el extremo de la barra en una esquina o usa una máquina T-Bar. Agarra las empuñaduras o la barra con las dos manos. Tira de la barra hacia el pecho, manteniendo los codos cerca del cuerpo. Baja de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 8-10 repeticiones.</p>
                    <p><strong>Descanso:</strong> 90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 9: Hiperextensiones -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise9')">Hiperextensiones (Back Extensions)</h2>
                <div id="exercise9" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Banco de hiperextensiones o GHD.</p>
                    <p><strong>Músculos Trabajados:</strong> Erectores espinales, glúteos, isquiotibiales.</p>
                    <p><strong>Cómo hacerlo:</strong> Colócate boca abajo en el banco de hiperextensiones, con los tobillos asegurados. Mantén las manos cruzadas sobre el pecho o detrás de la cabeza. Baja el torso flexionando las caderas y luego extiende para volver a la posición inicial.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60-90 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 10: Face Pull -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise10')">Face Pull (Jalón de Cuerda para Cara)</h2>
                <div id="exercise10" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Máquina de polea alta con cuerda.</p>
                    <p><strong>Músculos Trabajados:</strong> Deltoides posterior, trapecio, romboides.</p>
                    <p><strong>Cómo hacerlo:</strong> Ajusta la polea a la altura de la cara, agarra la cuerda con ambas manos y tira hacia la cara, llevando los codos hacia atrás y las manos a los lados de la cabeza. Devuelve la cuerda de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 11: Encogimientos de Hombros con Barra -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise11')">Encogimientos de Hombros con Barra (Barbell Shrugs)</h2>
                <div id="exercise11" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta.</p>
                    <p><strong>Músculos Trabajados:</strong> Trapecio, deltoides.</p>
                    <p><strong>Cómo hacerlo:</strong> Sostén la barra con los brazos extendidos a los lados. Encoge los hombros hacia arriba lo más alto posible sin mover los brazos. Baja los hombros de manera controlada.</p>
                    <p><strong>Series/Repeticiones:</strong> 4 series de 12-15 repeticiones.</p>
                    <p><strong>Descanso:</strong> 60 segundos entre series.</p>
                </div>
            </div>

            <!-- Ejercicio 12: Buenos Días -->
            <div class="exercise">
                <h2 class="exercise-header" onclick="toggleExerciseDetails('exercise12')">Buenos Días (Good Mornings)</h2>
                <div id="exercise12" class="exercise-details">
                    <p><strong>Máquina/Barra:</strong> Barra recta.</p>
                    <p><strong>Músculos Trabajados:</strong> Erectores espinales, glúteos, isquiotibiales.</p>
                    <p><strong>Cómo hacerlo:</strong> Coloca la barra sobre los trapecios como en una sentadilla trasera. Con las rodillas ligeramente flexionadas, inclina el torso hacia adelante desde las caderas, manteniendo la espalda recta. Vuelve a la posición inicial empujando las caderas hacia adelante.</p>
                    <p><strong>Series/Repeticiones:</strong> 3-4 series de 10-12 repeticiones.</p>
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
                <li><strong>Calentamiento:</strong> Antes de iniciar la rutina, realiza un calentamiento de 5-10 minutos que incluya movilidad articular y cardio ligero para preparar los músculos y articulaciones.</li>
                <li><strong>Progresión:</strong> Incrementa gradualmente el peso a medida que te sientas más fuerte, pero siempre priorizando una técnica adecuada para evitar lesiones.</li>
                <li><strong>Variabilidad:</strong> Cambia los ejercicios cada 4-6 semanas para evitar estancamientos y seguir progresando.</li>
            </ul>
        </div>
    </div>
@endsection
