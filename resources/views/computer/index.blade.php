@extends('layouts.app')

@section('title', 'Computadores')

@section('content')
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
@endsection
