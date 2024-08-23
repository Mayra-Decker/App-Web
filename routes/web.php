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
Route::get('/breakfast/options/ectomorph', function () {
    return view('options_foods_ectomorph.breakfast_options_ectomorph');
})->name('breakfast.options.ectomorph');
