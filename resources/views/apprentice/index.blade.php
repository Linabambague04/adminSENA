@extends('layouts.app')

@section('title', 'Aprendices')

@section('content')
<h2>Lista de Aprendices</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Curso ID</th>
            <th>Computador ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($apprentices as $apprentice)
            <tr>
                <td>{{ $apprentice->id }}</td>
                <td>{{ $apprentice->name }}</td>
                <td>{{ $apprentice->email }}</td>
                <td>{{ $apprentice->cell_number }}</td>
                <td>{{ $apprentice->course_id }}</td>
                <td>{{ $apprentice->computer_id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
