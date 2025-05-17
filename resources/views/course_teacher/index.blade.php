@extends('layouts.app')

@section('title', 'Cursos - Docentes')

@section('content')
<h2>Lista Cursos - Docentes</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Curso ID</th>
            <th>Docente ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($course_teachers as $course_teacher)
            <tr>
                <td>{{ $course_teacher->id }}</td>
                <td>{{ $course_teacher->course_id }}</td>
                <td>{{ $course_teacher->teacher_id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
