@extends('layouts.app')

@section('title', 'Editar Computadora')

@section('content')
    <h1>Editar Computadora</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('computers.update', $computer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $computer->name) }}" required>
        </div>
        <div>
            <label for="brand">Marca:</label>
            <input type="text" name="brand" id="brand" value="{{ old('brand', $computer->brand) }}" required>
        </div>
        <button type="submit">Actualizar</button>
        <a href="{{ route('computers.index') }}">Cancelar</a>
    </form>
@endsection
