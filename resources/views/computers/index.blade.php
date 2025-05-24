@extends('layouts.app')

@section('title', 'Computadoras')

@section('content')
    <h1>Lista de Computadoras</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('computers.create') }}">Crear nueva computadora</a>

    <table border="1" cellpadding="5" cellspacing="0" style="margin-top: 10px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($computers as $computer)
                <tr>
                    <td>{{ $computer->id }}</td>
                    <td>{{ $computer->name }}</td>
                    <td>{{ $computer->brand }}</td>
                    <td>
                        <a href="{{ route('computers.show', $computer->id) }}">Ver</a> |
                        <a href="{{ route('computers.edit', $computer->id) }}">Editar</a> |
                        <form action="{{ route('computers.destroy', $computer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Estás seguro de eliminar esta computadora?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
