<?php

namespace App\Http\Controllers;

use App\Models\Muscle;
use Illuminate\Http\Request;

class MuscleController extends Controller
{
    public function index()
    {
        $muscles = Muscle::all();
        return view('muscle.index', compact('muscles'));
    }

    public function show($id)
    {
        $muscle = Muscle::findOrFail($id);
        $exercises = $muscle->exercises;
        return view('muscle.show', compact('muscle', 'exercises'));
    }
}
