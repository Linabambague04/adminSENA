@extends('layouts.app')

@section('title', 'Detalle del Computador')
@section('content')
    <h2 style="margin-top: 20px;">Detalle del Computador</h2>

    <div style="margin-top: 20px; padding: 20px; border: 1px solid #ccc; border-radius: 10px;">
        <p><strong>ID:</strong> {{ $computer->id }}</p>
        <p><strong>Número:</strong> {{ $computer->number }}</p>
        <p><strong>Marca:</strong> {{ $computer->brand }}</p>

        <a href="{{ route('computer.index') }}">
            <button style="margin-top: 15px; padding: 8px 16px; background-color: #000; color: white; border-radius: 10px; cursor: pointer;">
                Volver a la lista
            </button>
        </a>
    </div>
@endsection
