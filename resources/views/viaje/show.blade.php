@extends('layouts.app')

@section('title', 'Detalles del Viaje')

@section('content')
    <h1>Detalles del Viaje</h1>
    <p>Origen: {{ $viaje->origen }}</p>
    <p>Destino: {{ $viaje->destino }}</p>
    <p>Fecha de Salida: {{ $viaje->fecha_salida }}</p>
    <p>Fecha de Llegada: {{ $viaje->fecha_llegada }}</p>
    <p>Vehículo: {{ $viaje->vehiculo->nombre }}</p>
    <p>Conductor: {{ $viaje->conductor->nombre }}</p>
@endsection
