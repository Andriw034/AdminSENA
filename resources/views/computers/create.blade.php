@extends('layouts.app')

@section('title', 'Crear Computadora')

@section('content')
    <h1>Crear Nueva Computadora</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('computers.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="brand">Marca:</label>
            <input type="text" name="brand" id="brand" value="{{ old('brand') }}" required>
        </div>
        <button type="submit">Guardar</button>
        <a href="{{ route('computers.index') }}">Cancelar</a>
    </form>
@endsection
