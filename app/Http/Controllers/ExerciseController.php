<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();
        return view('exercise.index', compact('exercises'));
    }

    public function show($id)
    {
        $exercise = Exercise::findOrFail($id);
        return view('exercise.show', compact('exercise'));
    }
}