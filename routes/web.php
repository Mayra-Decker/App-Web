<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuscleController;
use App\Http\Controllers\ExerciseController;

Route::get('/', function () {
    return view('home1');
})->name('home1');


Route::get('/home', function () {
    return view('home');
});

Route::get('/muscles/{id}', [MuscleController::class, 'show'])->name('muscles.show');
Route::get('/exercises/{id}', [ExerciseController::class, 'show'])->name('exercises.show');

// Ruta para Ectomorfo
Route::get('/ectomorph/exercises', function () {
    return view('ectomorph.exercises');
})->name('ectomorph.exercises');

Route::get('/ectomorph/diet', function () {
    return view('ectomorph.diet');
})->name('ectomorph.diet');

// Ruta para Mesomorfo
Route::get('/mesomorph/exercises', function () {
    return view('mesomorph.exercises');
})->name('mesomorph.exercises');

Route::get('/mesomorph/diet', function () {
    return view('mesomorph.diet');
})->name('mesomorph.diet');

// Ruta para Endomorfo
Route::get('/endomorph/exercises', function () {
    return view('endomorph.exercises');
})->name('endomorph.exercises');

Route::get('/endomorph/diet', function () {
    return view('endomorph.diet');
})->name('endomorph.diet');

// Ruta para Ejercicios de Pecho
Route::get('/exercises/chest', [ExerciseController::class, 'chest'])->name('exercises.chest');

// Ruta para opciones de desayunos de ectomorfo
Route::get('/options_meal_ectomorph/breakfast_options_ectomorph', function () {
    return view('options_meal_ectomorph.breakfast_options_ectomorph');
})->name('breakfast.options.ectomorph');

// Ruta para opciones de media mañana de ectomorfo
Route::get('/options_meal_ectomorph/brunch_options_ectomorph', function () {
    return view('options_meal_ectomorph.brunch_options_ectomorph');
})->name('brunch.options.ectomorph');

// Ruta para opciones de almuerzos de ectomorfo
Route::get('/options_meal_ectomorph/lunch_options_ectomorph', function () {
    return view('options_meal_ectomorph.lunch_options_ectomorph');
})->name('lunch.options.ectomorph');

// Ruta para opciones de pre-entreno de ectomorfo
Route::get('/options_meal_ectomorph/pre-em_options_ectomorph', function () {
    return view('options_meal_ectomorph.pre-em_options_ectomorph');
})->name('pre-em.options.ectomorph');

// Ruta para opciones de post-entreno de ectomorfo
Route::get('/options_meal_ectomorph/post-em_options_ectomorph', function () {
    return view('options_meal_ectomorph.post-em_options_ectomorph');
})->name('post-em.options.ectomorph');

// Ruta para opciones de cena de ectomorfo
Route::get('/options_meal_ectomorph/msnack_options_ectomorph', function () {
    return view('options_meal_ectomorph.msnack_options_ectomorph');
})->name('msnack.options.ectomorph');

// Ruta para opciones de desayunos de endomorfo
Route::get('/options_meal_endomorph/breakfast_options_endomorph', function () {
    return view('options_meal_endomorph.breakfast_options_endomorph');
})->name('breakfast.options.endomorph');

// Ruta para opciones de media mañana de endomorfo
Route::get('/options_meal_endomorph/brunch_options_endomorph', function () {
    return view('options_meal_endomorph.brunch_options_endomorph');
})->name('brunch.options.endomorph');

// Ruta para opciones de almuerzos de endomorfo
Route::get('/options_meal_endomorph/lunch_options_endomorph', function () {
    return view('options_meal_endomorph.lunch_options_endomorph');
})->name('lunch.options.endomorph');

// Ruta para opciones de pre-entreno de endomorfo
Route::get('/options_meal_endomorph/pre-em_options_endomorph', function () {
    return view('options_meal_endomorph.pre-em_options_endomorph');
})->name('pre-em.options.endomorph');

// Ruta para opciones de post-entreno de endomorfo
Route::get('/options_meal_endomorph/post-em_options_endomorph', function () {
    return view('options_meal_endomorph.post-em_options_endomorph');
})->name('post-em.options.endomorph');

// Ruta para opciones de cena de endomorfo
Route::get('/options_meal_endomorph/msnack_options_endomorph', function () {
    return view('options_meal_endomorph.msnack_options_endomorph');
})->name('msnack.options.endomorph');

// Ruta para opciones de desayunos de mesomorfo
Route::get('/options_meal_mesomorph/breakfast_options_mesomorph', function () {
    return view('options_meal_mesomorph.breakfast_options_mesomorph');
})->name('breakfast.options.mesomorph');

// Ruta para opciones de media mañana de mesomorfo
Route::get('/options_meal_mesomorph/brunch_options_mesomorph', function () {
    return view('options_meal_mesomorph.brunch_options_mesomorph');
})->name('brunch.options.mesomorph');

// Ruta para opciones de almuerzos de mesomorfo
Route::get('/options_meal_mesomorph/lunch_options_mesomorph', function () {
    return view('options_meal_mesomorph.lunch_options_mesomorph');
})->name('lunch.options.mesomorph');

// Ruta para opciones de pre-entreno de mesomorfo
Route::get('/options_meal_mesomorph/pre-em_options_mesomorph', function () {
    return view('options_meal_mesomorph.pre-em_options_mesomorph');
})->name('pre-em.options.mesomorph');

// Ruta para opciones de post-entreno de mesomorfo
Route::get('/options_meal_mesomorph/post-em_options_mesomorph', function () {
    return view('options_meal_mesomorph.post-em_options_mesomorph');
})->name('post-em.options.mesomorph');

// Ruta para opciones de cena de mesomorfo
Route::get('/options_meal_mesomorph/msnack_options_mesomorph', function () {
    return view('options_meal_mesomorph.msnack_options_mesomorph');
})->name('msnack.options.mesomorph');

//Ruta para opciones de ejercicios de ectomorfo
Route::get('/options_exercises_ectomorph/more_options', function () {
    return view('options_exercises_ectomorph.more_options');
})->name('options_exercises_ectomorph.more_options');

//ruta para ejercisos espalda
Route::get('/options_exercises_ectomorph/more_options_back', function () {
    return view('options_exercises_ectomorph.more_options_back');
})->name('exercises.more_options_back');

//ruta para ejercicios piernas
Route::get('/options_exercises_ectomorph/more_options_legs', function () {
    return view('options_exercises_ectomorph.more_options_legs');
})->name('exercises.more_options_legs');

//ruta para ejercisios brazos
Route::get('/options_exercises_ectomorph/more_options_arms', function () {
    return view('options_exercises_ectomorph.more_options_arms');
})->name('exercises.more_options_arms');

//ruta de ejercicios abdomen
Route::get('/options_exercises_ectomorph/more_options_abs', function () {
    return view('options_exercises_ectomorph.more_options_abs');
})->name('exercises.more_options_abs');


// RUTAS DE EJERCICIOS PARA MESOMORFO
// Ruta para Pecho (Chest)
Route::get('/exercises/mesomorph/chest', function () {
    return view('options_exercises_mesomorph.more_options_chest');
})->name('mesomorph.more_options_chest');

// Ruta para Espalda (Back)
Route::get('/exercises/mesomorph/back', function () {
    return view('options_exercises_mesomorph.more_options_back');
})->name('mesomorph.more_options_back');

// Ruta para Piernas (Legs)
Route::get('/exercises/mesomorph/legs', function () {
    return view('options_exercises_mesomorph.more_options_legs');
})->name('mesomorph.more_options_legs');

// Ruta para Brazos (Arms)
Route::get('/exercises/mesomorph/arms', function () {
    return view('options_exercises_mesomorph.more_options_arms');
})->name('mesomorph.more_options_arms');

// Ruta para Abdomen (Abs)
Route::get('/exercises/mesomorph/abs', function () {
    return view('options_exercises_mesomorph.more_options_abs');
})->name('mesomorph.more_options_abs');

//RUTA DE EJERCICIOS PARA ENDOMORFO
Route::get('/options_exercises_endomorph/more_options_chest', function () {
    return view('options_exercises_endomorph.more_options_chest');
})->name('options_exercises_endomorph.more_options_chest');

// Replicar para cada sección
Route::get('/options_exercises_endomorph/more_options_back', function () {
    return view('options_exercises_endomorph.more_options_back');
})->name('options_exercises_endomorph.more_options_back');

Route::get('/options_exercises_endomorph/more_options_legs', function () {
    return view('options_exercises_endomorph.more_options_legs');
})->name('options_exercises_endomorph.more_options_legs');

Route::get('/options_exercises_endomorph/more_options_arms', function () {
    return view('options_exercises_endomorph.more_options_arms');
})->name('options_exercises_endomorph.more_options_arms');

Route::get('/options_exercises_endomorph/more_options_abs', function () {
    return view('options_exercises_endomorph.more_options_abs');
})->name('options_exercises_endomorph.more_options_abs');



// Rutas para ejercicios de pecho en Mesomorfo peso libre
Route::get('/exercises/mesomorph/chest/flat-barbell-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_peso_libre.flat_barbell_bench_press');
})->name('exercises.mesomorph.chest.flat_barbell_bench_press');

Route::get('/exercises/mesomorph/chest/flat-dumbbell-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_peso_libre.flat_dumbbell_bench_press');
})->name('exercises.mesomorph.chest.flat_dumbbell_bench_press');

Route::get('/exercises/mesomorph/chest/incline-barbell-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_peso_libre.incline_barbell_bench_press');
})->name('exercises.mesomorph.chest.incline_barbell_bench_press');

Route::get('/exercises/mesomorph/chest/incline-dumbbell-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_peso_libre.incline_dumbbell_bench_press');
})->name('exercises.mesomorph.chest.incline_dumbbell_bench_press');

Route::get('/exercises/mesomorph/chest/decline-barbell-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_peso_libre.decline_barbell_bench_press');
})->name('exercises.mesomorph.chest.decline_barbell_bench_press');

Route::get('/exercises/mesomorph/chest/decline-dumbbell-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_peso_libre.decline_dumbbell_bench_press');
})->name('exercises.mesomorph.chest.decline_dumbbell_bench_press');

Route::get('/exercises/mesomorph/chest/flat-dumbbell-flyes', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_peso_libre.flat_dumbbell_flyes');
})->name('exercises.mesomorph.chest.flat_dumbbell_flyes');

Route::get('/exercises/mesomorph/chest/incline-dumbbell-flyes', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_peso_libre.incline_dumbbell_flyes');
})->name('exercises.mesomorph.chest.incline_dumbbell_flyes');

Route::get('/exercises/mesomorph/chest/decline-dumbbell-flyes', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_peso_libre.decline_dumbbell_flyes');
})->name('exercises.mesomorph.chest.decline_dumbbell_flyes');

Route::get('/exercises/mesomorph/chest/alternating-dumbbell-chest-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_peso_libre.alternating_dumbbell_chest_press');
})->name('exercises.mesomorph.chest.alternating_dumbbell_chest_press');
 
 
// Rutas para ejercicios con máquinas y equipos
Route::get('/exercises/mesomorph/chest/ejercicios_con_maquinas_y_equipos/machine-chest-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_maquinas_y_equipos.machine_chest_press');
})->name('exercises.mesomorph.chest.machine_chest_press');

Route::get('/exercises/mesomorph/chest/ejercicios_con_maquinas_y_equipos/incline-machine-chest-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_maquinas_y_equipos.incline_machine_chest_press');
})->name('exercises.mesomorph.chest.incline_machine_chest_press');

Route::get('/exercises/mesomorph/chest/ejercicios_con_maquinas_y_equipos/decline-machine-chest-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_maquinas_y_equipos.decline_machine_chest_press');
})->name('exercises.mesomorph.chest.decline_machine_chest_press');

Route::get('/exercises/mesomorph/chest/ejercicios_con_maquinas_y_equipos/pec-deck-fly-machine', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_maquinas_y_equipos.pec_deck_fly_machine');
})->name('exercises.mesomorph.chest.pec_deck_fly_machine');

Route::get('/exercises/mesomorph/chest/ejercicios_con_maquinas_y_equipos/smith-machine-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_maquinas_y_equipos.smith_machine_bench_press');
})->name('exercises.mesomorph.chest.smith_machine_bench_press');

Route::get('/exercises/mesomorph/chest/ejercicios_con_maquinas_y_equipos/smith-machine-incline-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_maquinas_y_equipos.smith_machine_incline_bench_press');
})->name('exercises.mesomorph.chest.smith_machine_incline_bench_press');

Route::get('/exercises/mesomorph/chest/ejercicios_con_maquinas_y_equipos/smith-machine-decline-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_maquinas_y_equipos.smith_machine_decline_bench_press');
})->name('exercises.mesomorph.chest.smith_machine_decline_bench_press');

Route::get('/exercises/mesomorph/chest/ejercicios_con_maquinas_y_equipos/multipower-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_maquinas_y_equipos.multipower_bench_press');
})->name('exercises.mesomorph.chest.multipower_bench_press');

Route::get('/exercises/mesomorph/chest/ejercicios_con_maquinas_y_equipos/single-arm-dumbbell-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_maquinas_y_equipos.single_arm_dumbbell_bench_press');
})->name('exercises.mesomorph.chest.single_arm_dumbbell_bench_press');

Route::get('/exercises/mesomorph/chest/ejercicios_con_maquinas_y_equipos/converging-chest-press-machine', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_maquinas_y_equipos.converging_chest_press_machine');
})->name('exercises.mesomorph.chest.converging_chest_press_machine');
 
//EJERCICOS CON POLEAS Y CABLES
Route::get('/exercises/mesomorph/chest/high-cable-crossovers', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_poleas_y_cables.high_cable_crossovers');
})->name('exercises.mesomorph.chest.high_cable_crossovers');

Route::get('/exercises/mesomorph/chest/low-cable-crossovers', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_poleas_y_cables.low_cable_crossovers');
})->name('exercises.mesomorph.chest.low_cable_crossovers');

Route::get('/exercises/mesomorph/chest/low-cable-chest-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_poleas_y_cables.low_cable_chest_press');
})->name('exercises.mesomorph.chest.low_cable_chest_press');

Route::get('/exercises/mesomorph/chest/high-cable-chest-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_poleas_y_cables.high_cable_chest_press');
})->name('exercises.mesomorph.chest.high_cable_chest_press');

Route::get('/exercises/mesomorph/chest/flat-bench-cable-flyes', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_poleas_y_cables.flat_bench_cable_flyes');
})->name('exercises.mesomorph.chest.flat_bench_cable_flyes');

Route::get('/exercises/mesomorph/chest/incline-bench-cable-flyes', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_poleas_y_cables.incline_bench_cable_flyes');
})->name('exercises.mesomorph.chest.incline_bench_cable_flyes');

Route::get('/exercises/mesomorph/chest/decline-bench-cable-flyes', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_poleas_y_cables.decline_bench_cable_flyes');
})->name('exercises.mesomorph.chest.decline_bench_cable_flyes');

Route::get('/exercises/mesomorph/chest/cable-chest-press-machine', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_poleas_y_cables.cable_chest_press_machine');
})->name('exercises.mesomorph.chest.cable_chest_press_machine');

Route::get('/exercises/mesomorph/chest/cable-pullovers', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_poleas_y_cables.cable_pullovers');
})->name('exercises.mesomorph.chest.cable_pullovers');

Route::get('/exercises/mesomorph/chest/single-arm-cable-flyes', function () {
    return view('exercises.mesomorph.chest.ejercicios_con_poleas_y_cables.single_arm_cable_flyes');
})->name('exercises.mesomorph.chest.single_arm_cable_flyes');

//RUTA EJERCICIOS DE CALISTENIA Y VARIACIONES
Route::get('/exercises/mesomorph/chest/push-ups', function () {
    return view('exercises.mesomorph.chest.ejercicios_de_calistenia_y_variaciones.push_ups');
})->name('exercises.mesomorph.chest.push_ups');

Route::get('/exercises/mesomorph/chest/incline-push-ups', function () {
    return view('exercises.mesomorph.chest.ejercicios_de_calistenia_y_variaciones.incline_push_ups');
})->name('exercises.mesomorph.chest.incline_push_ups');

Route::get('/exercises/mesomorph/chest/decline-push-ups', function () {
    return view('exercises.mesomorph.chest.ejercicios_de_calistenia_y_variaciones.decline_push_ups');
})->name('exercises.mesomorph.chest.decline_push_ups');

Route::get('/exercises/mesomorph/chest/diamond-push-ups', function () {
    return view('exercises.mesomorph.chest.ejercicios_de_calistenia_y_variaciones.diamond_push_ups');
})->name('exercises.mesomorph.chest.diamond_push_ups');

Route::get('/exercises/mesomorph/chest/clapping-push-ups', function () {
    return view('exercises.mesomorph.chest.ejercicios_de_calistenia_y_variaciones.clapping_push_ups');
})->name('exercises.mesomorph.chest.clapping_push_ups');

Route::get('/exercises/mesomorph/chest/stability-ball-push-ups', function () {
    return view('exercises.mesomorph.chest.ejercicios_de_calistenia_y_variaciones.stability_ball_push_ups');
})->name('exercises.mesomorph.chest.stability_ball_push_ups');

Route::get('/exercises/mesomorph/chest/ring-push-ups', function () {
    return view('exercises.mesomorph.chest.ejercicios_de_calistenia_y_variaciones.ring_push_ups');
})->name('exercises.mesomorph.chest.ring_push_ups');

Route::get('/exercises/mesomorph/chest/dips', function () {
    return view('exercises.mesomorph.chest.ejercicios_de_calistenia_y_variaciones.dips');
})->name('exercises.mesomorph.chest.dips');

Route::get('/exercises/mesomorph/chest/bench-dips', function () {
    return view('exercises.mesomorph.chest.ejercicios_de_calistenia_y_variaciones.bench_dips');
})->name('exercises.mesomorph.chest.bench_dips');

Route::get('/exercises/mesomorph/chest/weighted-push-ups', function () {
    return view('exercises.mesomorph.chest.ejercicios_de_calistenia_y_variaciones.weighted_push_ups');
})->name('exercises.mesomorph.chest.weighted_push_ups');

//RUTAS EJERCICIOS AVANZADOS Y FUNCIONALIDADES
Route::get('/exercises/mesomorph/chest/chain-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_avanzados_y_funcionalidades.chain_bench_press');
})->name('exercises.mesomorph.chest.chain_bench_press');

Route::get('/exercises/mesomorph/chest/resistance-band-chest-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_avanzados_y_funcionalidades.resistance_band_chest_press');
})->name('exercises.mesomorph.chest.resistance_band_chest_press');

Route::get('/exercises/mesomorph/chest/trx-chest-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_avanzados_y_funcionalidades.trx_chest_press');
})->name('exercises.mesomorph.chest.trx_chest_press');

Route::get('/exercises/mesomorph/chest/moving-plank-push-ups', function () {
    return view('exercises.mesomorph.chest.ejercicios_avanzados_y_funcionalidades.moving_plank_push_ups');
})->name('exercises.mesomorph.chest.moving_plank_push_ups');

Route::get('/exercises/mesomorph/chest/trx-chest-flyes', function () {
    return view('exercises.mesomorph.chest.ejercicios_avanzados_y_funcionalidades.trx_chest_flyes');
})->name('exercises.mesomorph.chest.trx_chest_flyes');

Route::get('/exercises/mesomorph/chest/medicine-ball-push-ups', function () {
    return view('exercises.mesomorph.chest.ejercicios_avanzados_y_funcionalidades.medicine_ball_push_ups');
})->name('exercises.mesomorph.chest.medicine_ball_push_ups');

Route::get('/exercises/mesomorph/chest/twisting-dumbbell-chest-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_avanzados_y_funcionalidades.twisting_dumbbell_chest_press');
})->name('exercises.mesomorph.chest.twisting_dumbbell_chest_press');

Route::get('/exercises/mesomorph/chest/twisting-barbell-bench-press', function () {
    return view('exercises.mesomorph.chest.ejercicios_avanzados_y_funcionalidades.twisting_barbell_bench_press');
})->name('exercises.mesomorph.chest.twisting_barbell_bench_press');

Route::get('/exercises/mesomorph/chest/paused-push-ups', function () {
    return view('exercises.mesomorph.chest.ejercicios_avanzados_y_funcionalidades.paused_push_ups');
})->name('exercises.mesomorph.chest.paused_push_ups');

Route::get('/exercises/mesomorph/chest/asymmetric-push-ups', function () {
    return view('exercises.mesomorph.chest.ejercicios_avanzados_y_funcionalidades.asymmetric_push_ups');
})->name('exercises.mesomorph.chest.asymmetric_push_ups');