@extends('layouts.layout')

@section('title', 'Lista de Ejercicios')

@section('content')
    <h1>Lista de Ejercicios</h1>
    <ul>
        @foreach($exercises as $exercise)
            <li><a href="{{ route('exercises.show', $exercise->id) }}">{{ $exercise->name }}</a></li>
        @endforeach
    </ul>
@endsection
