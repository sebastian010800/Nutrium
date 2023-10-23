@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Localidades</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($localidades as $localidad)
            <tr>
                <td>{{ $localidad->nombre_localidad }}</td>
                <td>{{ $localidad->descripcion_localidad }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('Nueva_localidad') }}" class="btn btn-primary">Nueva Localidad</a>

</div>
@endsection
