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
                        <button class="btn btn-success" data-toggle="modal" data-target="#modalVerMas">Ver más</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('Nuevo_investigador') }}" class="btn btn-primary">Nuevo investigador</a>

    <div class="modal fade" id="modalVerMas" tabindex="-1" role="dialog" aria-labelledby="modalVerMasLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVerMasLabel">Detalles de investigador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Fecha de Nacimiento: 1980-05-01</p>
                <p>Género: Femenino</p>
                <p>Celular: 3016782459 </p>
                <p>Dirección: Cra 1 N # 23 45 A</p>
                <p>Correo electronico ElenaGarcia1980@investigacion.com</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
