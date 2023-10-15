@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>Listado de Accidentes de Trabajo</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Fecha del Accidente</th>
                <th>Hora del Accidente</th>
                <th>Descripción del Accidente</th>
                <th>Calificación del Accidente</th>
                <th>Localidad</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($adts as $adt)
            <tr>
                <td>{{ $adt->fecha_accidente }}</td>
                <td>{{ $adt->hora_accidente }}</td>
                <td>{{ $adt->descripcion_accidente }}</td>
                <td>{{ $adt->calificacion_accidente }}</td>
                <td>{{ $adt->nombre_localidad }}</td>
                <td>{{ $adt->nombre_usuario }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection