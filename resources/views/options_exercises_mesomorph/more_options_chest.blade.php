@extends('layouts.layout')

@section('title', 'Ejercicios para el Pecho - Mesomorfos')

@section('content')
<div class="intro-section">
    <h1>Ejercicios para el Pecho - Mesomorfos</h1>
    <p>A continuación te presentamos una lista detallada de ejercicios para el pecho, ideales para personas con tipo de cuerpo mesomorfo.</p>
</div>


    <div class="exercise-section">
        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('free-weight-exercises')">1. Ejercicios con Peso Libre</h2>
            <div id="free-weight-exercises" class="exercise-details">
                <ul>
                    <li><a href="{{ route('exercises.mesomorph.chest.flat_barbell_bench_press') }}">Press de Pecho con Barra en Banco Plano (Flat Barbell Bench Press)</a></li>
                    <li><a href="{{ route('exercises.mesomorph.chest.flat_dumbbell_bench_press') }}">Press de Pecho con Mancuernas en Banco Plano (Flat Dumbbell Bench Press)</a></li>
                    <li><a href="{{ route('exercises.mesomorph.chest.incline_barbell_bench_press') }}">Press de Pecho Inclinado con Barra (Incline Barbell Bench Press)</a></li>
                    <li><a href="{{ route('exercises.mesomorph.chest.incline_dumbbell_bench_press') }}">Press de Pecho Inclinado con Mancuernas (Incline Dumbbell Bench Press)</a></li>
                    <li><a href="{{ route('exercises.mesomorph.chest.decline_barbell_bench_press') }}">Press de Pecho Declinado con Barra (Decline Barbell Bench Press)</a></li>
                    <li><a href="{{ route('exercises.mesomorph.chest.decline_dumbbell_bench_press') }}">Press de Pecho Declinado con Mancuernas (Decline Dumbbell Bench Press)</a></li>
                    <li><a href="{{ route('exercises.mesomorph.chest.flat_dumbbell_flyes') }}">Aperturas con Mancuernas en Banco Plano (Flat Dumbbell Flyes)</a></li>
                    <li><a href="{{ route('exercises.mesomorph.chest.incline_dumbbell_flyes') }}">Aperturas con Mancuernas en Banco Inclinado (Incline Dumbbell Flyes)</a></li>
                    <li><a href="{{ route('exercises.mesomorph.chest.decline_dumbbell_flyes') }}">Aperturas con Mancuernas en Banco Declinado (Decline Dumbbell Flyes)</a></li>
                    <li><a href="{{ route('exercises.mesomorph.chest.alternating_dumbbell_chest_press') }}">Press de Pecho con Mancuernas Alterno (Alternating Dumbbell Chest Press)</a></li>
                </ul>

            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('machine-equipment-exercises')">2. Ejercicios con Máquinas y Equipos</h2>
            <div id="machine-equipment-exercises" class="exercise-details">
            <ul>
                <li><a href="{{ route('exercises.mesomorph.chest.machine_chest_press') }}">Press de Pecho en Máquina (Machine Chest Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.incline_machine_chest_press') }}">Press de Pecho Inclinado en Máquina (Incline Machine Chest Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.decline_machine_chest_press') }}">Press de Pecho Declinado en Máquina (Decline Machine Chest Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.pec_deck_fly_machine') }}">Pectoral Machine (Pec Deck Fly Machine)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.smith_machine_bench_press') }}">Press de Pecho en Smith Machine (Smith Machine Bench Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.smith_machine_incline_bench_press') }}">Press de Pecho Inclinado en Smith Machine (Smith Machine Incline Bench Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.smith_machine_decline_bench_press') }}">Press de Pecho Declinado en Smith Machine (Smith Machine Decline Bench Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.multipower_bench_press') }}">Press de Pecho con Barra en Multipower (Multipower Bench Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.single_arm_dumbbell_bench_press') }}">Press de Pecho con Mancuernas en Banco con Apoyo Unilateral (Single Arm Dumbbell Bench Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.converging_chest_press_machine') }}">Press de Pecho en Máquina Convergente (Converging Chest Press Machine)</a></li>
            </ul>

            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('cable-exercises')">3. Ejercicios con Poleas y Cables</h2>
            <div id="cable-exercises" class="exercise-details">
                
            <ul>
                <li><a href="{{ route('exercises.mesomorph.chest.high_cable_crossovers') }}">Cruces de Polea Alta (High Cable Crossovers)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.low_cable_crossovers') }}">Cruces de Polea Baja (Low Cable Crossovers)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.low_cable_chest_press') }}">Press de Pecho en Polea Baja (Low Cable Chest Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.high_cable_chest_press') }}">Press de Pecho en Polea Alta (High Cable Chest Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.flat_bench_cable_flyes') }}">Aperturas con Cable en Banco Plano (Flat Bench Cable Flyes)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.incline_bench_cable_flyes') }}">Aperturas con Cable en Banco Inclinado (Incline Bench Cable Flyes)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.decline_bench_cable_flyes') }}">Aperturas con Cable en Banco Declinado (Decline Bench Cable Flyes)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.cable_chest_press_machine') }}">Press de Pecho en Máquina con Cable (Cable Chest Press Machine)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.cable_pullovers') }}">Pullovers con Cable (Cable Pullovers)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.single_arm_cable_flyes') }}">Aperturas con Cable Unilateral (Single-Arm Cable Flyes)</a></li>
            </ul>
            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('calisthenics-exercises')">4. Ejercicios de Calistenia y Variaciones</h2>
            <div id="calisthenics-exercises" class="exercise-details">

            <ul>
                <li><a href="{{ route('exercises.mesomorph.chest.push_ups') }}">Push-Ups (Flexiones de Pecho)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.incline_push_ups') }}">Push-Ups con Manos Elevadas (Incline Push-Ups)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.decline_push_ups') }}">Push-Ups con Pies Elevados (Decline Push-Ups)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.diamond_push_ups') }}">Push-Ups Diamante (Diamond Push-Ups)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.clapping_push_ups') }}">Push-Ups con Palmada (Clapping Push-Ups)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.stability_ball_push_ups') }}">Push-Ups con Apoyo en Pelota de Estabilidad (Stability Ball Push-Ups)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.ring_push_ups') }}">Push-Ups en Anillas (Ring Push-Ups)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.dips') }}">Fondos en Paralelas (Dips)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.bench_dips') }}">Fondos en Banco (Bench Dips)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.weighted_push_ups') }}">Push-Ups con Peso Adicional (Weighted Push-Ups)</a></li>
            </ul>

            </div>
        </div>

        <div class="exercise">
            <h2 class="exercise-header" onclick="toggleExerciseDetails('advanced-exercises')">5. Ejercicios Avanzados y Funcionales</h2>
            <div id="advanced-exercises" class="exercise-details">
            <ul>
                <li><a href="{{ route('exercises.mesomorph.chest.chain_bench_press') }}">Press con Cadenas (Chain Bench Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.resistance_band_chest_press') }}">Press de Pecho con Banda Elástica (Resistance Band Chest Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.trx_chest_press') }}">Push-Ups en TRX (TRX Chest Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.moving_plank_push_ups') }}">Push-Ups en Plancha con Desplazamiento (Moving Plank Push-Ups)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.trx_chest_flyes') }}">Aperturas en TRX (TRX Chest Flyes)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.medicine_ball_push_ups') }}">Push-Ups con Balón Medicinal (Medicine Ball Push-Ups)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.twisting_dumbbell_chest_press') }}">Press de Pecho con Mancuernas y Gira (Twisting Dumbbell Chest Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.twisting_barbell_bench_press') }}">Press de Pecho con Barra y Gira (Twisting Barbell Bench Press)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.paused_push_ups') }}">Push-Ups con Pausa (Paused Push-Ups)</a></li>
                <li><a href="{{ route('exercises.mesomorph.chest.asymmetric_push_ups') }}">Push-Ups Asimétricos (Asymmetric Push-Ups)</a></li>
            </ul>

            </div>
        </div>
    </div>

    <script>
        function toggleExerciseDetails(id) {
    var header = document.querySelector('[onclick="toggleExerciseDetails(\'' + id + '\')"]');
    var details = document.getElementById(id);

    if (details.style.maxHeight) {
        details.style.maxHeight = null;
        header.classList.remove('active');
    } else {
        details.style.maxHeight = details.scrollHeight + "px";
        header.classList.add('active');
    }
}

    </script>
@endsection
