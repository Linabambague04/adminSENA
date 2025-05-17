@extends('layouts.app')

@section('title', 'Docentes')

@section('content')
<h2>Lista de Docentes</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Area ID</th>
            <th>Training Center ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->area_id }}</td>
                <td>{{ $teacher->training_center_id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
