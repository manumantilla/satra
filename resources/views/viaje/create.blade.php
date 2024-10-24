@extends('layouts.app')

@section('title', 'Crear un Nuevo Viaje')

@section('content')
    <h1>Crear un Viaje</h1>
    <form action="{{ route('viajes.store') }}" method="POST">
        @csrf
        <div>
            <label for="origen">Origen:</label>
            <input type="text" name="origen" required>
        </div>
        <div>
            <label for="destino">Destino:</label>
            <input type="text" name="destino" required>
        </div>
        <div>
            <label for="fecha_salida">Fecha de Salida:</label>
            <input type="date" name="fecha_salida" required>
        </div>
        <div>
            <label for="fecha_llegada">Fecha de Llegada:</label>
            <input type="date" name="fecha_llegada" required>
        </div>
        <button type="submit">Guardar Viaje</button>
    </form>
@endsection
