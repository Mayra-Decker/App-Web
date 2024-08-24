<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuscleController;
use App\Http\Controllers\ExerciseController;

Route::get('/', function () {
    return view('home');
})->name('home');

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
