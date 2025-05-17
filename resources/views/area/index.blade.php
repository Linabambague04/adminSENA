@extends('layouts.app')

@section('title', 'Áreas')

@section('content')
<h2>Lista de Áreas</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($areas as $area)
            <tr>
                <td>{{ $area->id }}</td>
                <td>{{ $area->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
