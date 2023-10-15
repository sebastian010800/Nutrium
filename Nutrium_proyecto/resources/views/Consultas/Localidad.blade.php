@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>Listado de Localidades</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de la Localidad</th>
                <th>Descripción de la Localidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($localidades as $localidad)
                <tr>
                    <td>{{ $localidad->id_localidad }}</td>
                    <td>{{ $localidad->nombre_localidad }}</td>
                    <td>{{ $localidad->descripcion_localidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
