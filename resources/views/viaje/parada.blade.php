@extends('layouts.app')

@section('title', 'Registrar Paradas del Conductor')

@section('content')
    <h1>Registrar Paradas</h1>

    <form action="{{ route('comportamiento.registrarParadas') }}" method="POST">
        @csrf

        <!-- Seleccionar viaje -->
        <div>
            <label for="viaje">Viaje:</label>
            <select name="viaje_id" required>
                @foreach($viajes as $viaje)
                    <option value="{{ $viaje->id }}">{{ $viaje->origen }} - {{ $viaje->destino }} ({{ $viaje->fecha_salida }})</option>
                @endforeach
            </select>
        </div>

        <!-- Registrar paradas -->
        <div>
            <label for="paradas">Número de Paradas:</label>
            <input type="number" name="paradas" min="0" required>
        </div>

        <!-- Botón para guardar -->
        <button type="submit">Registrar Paradas</button>
    </form>
@endsection
