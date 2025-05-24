@extends('layouts.app')

@section('title', 'Detalle de Computadora')

@section('content')
    <h1>Detalle de Computadora</h1>

    <p><strong>ID:</strong> {{ $computer->id }}</p>
    <p><strong>Nombre:</strong> {{ $computer->name }}</p>
    <p><strong>Marca:</strong> {{ $computer->brand }}</p>

    <a href="{{ route('computers.index') }}">Volver a la lista</a>
    <a href="{{ route('computers.edit', $computer->id) }}">Editar</a>
@endsection
