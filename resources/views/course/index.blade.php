@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
<h2>Lista de Cursos</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Numero de curso</th>
            <th>Día</th>
            <th>Área ID</th>
            <th>Centro de formación ID</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->course_number}}</td>
                <td>{{ $course->day }}</td>
                <td>{{ $course->area_id}}</td>
                <td>{{ $course->training_center_id}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
