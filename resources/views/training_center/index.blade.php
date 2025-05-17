@extends('layouts.app')

@section('title', 'Centros de Formación')

@section('content')
<h2>Lista de Centros de Formación</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Localidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($training_centers as $training_center)
            <tr>
                <td>{{ $training_center->id }}</td>
                <td>{{ $training_center->name }}</td>
                <td>{{ $training_center->location }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
