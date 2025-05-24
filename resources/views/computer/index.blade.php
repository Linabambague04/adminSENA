@extends('layouts.app')

@section('title', 'Computadores')

@section('content')
<<<<<<< HEAD
    <h2 style="margin-top: 20px;">Lista de Computadores</h2>

    <a href="{{ route('computer.create') }}">
        <button style="padding: 10px 20px; margin-top: 10px; background-color: #000000; color: white; border-radius: 15px; cursor: pointer;">
            Agregar un nuevo computador
        </button>
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Marca</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach  ($computers as $computer)
                <tr>
                    <td>{{ $computer->id }}</td>
                    <td>{{ $computer->number }}</td>
                    <td>{{ $computer->brand }}</td>
                    <td>
                        <a href="{{ route('computer.show', $computer->id) }}">
                            <button style="padding: 6px 12px; background-color: #000000; color: white; border: none; border-radius: 8px; cursor: pointer;">
                                Ver
                            </button>
                        </a>
                        <a href="{{ route('computer.edit', $computer->id) }}">
                            <button style="padding: 6px 12px; background-color: #000000; color: white; border: none; border-radius: 8px; cursor: pointer;">
                                Editar
                            </button>
                        </a>
                        <form action="{{ route('computer.destroy', $computer->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este computador?')" 
                        style="padding: 6px 12px; background-color: #000000; color: white; border: none; border-radius: 8px; cursor: pointer; margin-left: 5px;">
                            Eliminar
                        </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
=======
<h2>Lista de Computadores</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Número</th>
            <th>Marca</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($computers as $computer)
            <tr>
                <td>{{ $computer->id }}</td>
                <td>{{ $computer->number }}</td>
                <td>{{ $computer->brand }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
>>>>>>> b57ecaf2df31ed2a79b7baff05309c07e7fe3db4
@endsection
