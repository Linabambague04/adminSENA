@extends('layouts.app')

@section('title', 'Agregar Computador')

@section('content')
<h2>Agregar un nuevo computador</h2>

<form action="{{ route('computer.store') }}" method="POST">
    @csrf

    <div>
        <label for="number">Número</label>
        <input type="text" id="number" name="number" required style="width: 80%; padding: 8px; border-radius: 6px; border: 1px solid #ccc;">
    </div>

    <div>
        <label for="brand">Marca</label>
        <input type="text" id="brand" name="brand" required style="width: 80%; padding: 8px; border-radius: 6px; border: 1px solid #ccc; margin:10px;">
    </div>

    <button type="submit" style="padding: 10px 15px; background-color: #000000; color: white; border-radius: 8px; cursor: pointer; margin: 5px;">Guardar</button>
</form>

@endsection