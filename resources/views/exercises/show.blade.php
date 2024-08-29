@extends('layouts.layout')

@section('title', 'Detalle del Ejercicio')

@section('content')
    <h1>{{ $exercise->name }}</h1>
    <p>{{ $exercise->description }}</p>
    <p>Músculo trabajado: <a href="{{ route('muscles.show', $exercise->muscle->id) }}">{{ $exercise->muscle->name }}</a></p>
@endsection
