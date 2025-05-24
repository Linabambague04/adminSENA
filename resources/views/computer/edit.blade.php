@extends('layouts.app')

@section('title', 'Editar Computador')

@section('content')
    <h2>Editar Computador</h2>

    <form action="{{ route('computer.update', $computer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="number">Número:</label>
        <input type="text" name="number" id="number" value="{{ old('number', $computer->number) }}" required  style="width: 80%; padding: 8px; border-radius: 6px; border: 1px solid #ccc;">
        <br>
        <label for="brand">Marca:</label>
        <input type="text" name="brand" id="brand" value="{{ old('brand', $computer->brand) }}" required  style="width: 80%; padding: 8px; border-radius: 6px; border: 1px solid #ccc;">
        <br>
        <button type="submit" style="margin-top: 15px; padding: 8px 16px; background-color: #000; color: white; border-radius: 10px; cursor: pointer;">Actualizar</button>
    </form>
@endsection
