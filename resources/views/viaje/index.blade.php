@extends('layouts.app')

@section('title', 'Lista de Viajes')

@section('content')
    <h1>Gestión de Viajes</h1>
    <a href="{{ route('viajes.create') }}" class="btn btn-primary">Crear nuevo viaje</a>
    <table>
        <thead>
            <tr>
                <th>Origen</th>
                <th>Destino</th>
                <th>Vehículo</th>
                <th>Conductor</th>
                <th>Fecha de Salida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($viajes as $viaje)
            <tr>
                <td>{{ $viaje->origen }}</td>
                <td>{{ $viaje->destino }}</td>
                <td>{{ $viaje->vehiculo->nombre }}</td>
                <td>{{ $viaje->conductor->nombre }}</td>
                <td>{{ $viaje->fecha_salida }}</td>
                <td>
                    <a href="{{ route('viajes.show', $viaje->id) }}">Ver</a>
                    <a href="{{ route('viajes.edit', $viaje->id) }}">Editar</a>
                    <form action="{{ route('viajes.destroy', $viaje->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
