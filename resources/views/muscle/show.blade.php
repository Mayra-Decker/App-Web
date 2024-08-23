@extends('layouts.layout')

@section('title', 'Detalle del Músculo')

@section('content')
    <h1>{{ $muscle->name }}</h1>
    <h3>Ejercicios Relacionados</h3>
    <ul>
        @foreach($muscle->exercises as $exercise)
            <li><a href="{{ route('exercises.show', $exercise->id) }}">{{ $exercise->name }}</a></li>
        @endforeach
    </ul>
@endsection
