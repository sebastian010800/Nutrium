@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Valoraciones</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Valoración Primaria</th>
                <th>Valoración Secundaria</th>
                <th>Investigador </th>
                <th>Accidente de Trabajo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($valoraciones as $valoracion)
                <tr>
                    <td>{{ $valoracion->valoracion_primaria }}</td>
                    <td>{{ $valoracion->valoracion_secundaria }}</td>
                    <td>{{ $valoracion->investigador->nombre_investigador }}</td>
                    <td>{{ $valoracion->adt->user->name}} {{ $valoracion->adt->fecha_accidente }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('Nueva_valoracion') }}" class="btn btn-primary">Nueva Valoracion</a>
</div>
@endsection
