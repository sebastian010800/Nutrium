@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Investigadores en Accidentes</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Investigador</th>
                <th>Tipo de Investigador</th>
                <th>Número de Licencia</th>
                <th>Cargo (si aplica)</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($investigadores as $investigador)
                <tr>
                    <td>{{ $investigador->id }}</td>
                    <td>{{ $investigador->nombre_investigador }}</td>
                    <td>{{ $investigador->tipo_investigador }}</td>
                    <td>{{ $investigador->numero_licencia }}</td>
                    <td>
                        @if ($investigador->aplica_cargo == 1)
                            Sí
                        @else
                            No
                        @endif
                    </td>

                    <td>
                        <!-- Agrega botones de edición y eliminación si es necesario -->
                        <a href="" class="btn btn-primary">Editar</a>
                        <a href="" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('Nuevo_investigador') }}" class="btn btn-primary">Nuevo investigador</a>
</div>
@endsection
