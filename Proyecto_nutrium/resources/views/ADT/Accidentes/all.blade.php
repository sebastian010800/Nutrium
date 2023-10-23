@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Información de Accidentes</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Hora de Accidente</th>
                <th>Fecha de Accidente</th>
                <th>Descripción de Accidente</th>
                <th>Calificación de Accidente</th>
                <th>Localidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($adts as $adt)
                <tr>
                    <td>{{ $adt->user->name }}</td>
                    <td>{{ $adt->hora_accidente }}</td>
                    <td>{{ $adt->fecha_accidente }}</td>
                    <td>{{ $adt->descripcion_accidente }}</td>
                    <td>{{ $adt->calificacion_accidente }}</td>
                    <td>{{ $adt->localidad->nombre_localidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
