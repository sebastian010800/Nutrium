@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Accidente</th>
                <th>Causas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($causas as $causa)
                <tr>
                    <td>{{ $causa->adt->user->name }}</td>
                    <td>{{ $causa->adt->descripcion_accidente }}</td>
                    <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#modalVerMas{{ $causa->id }}">Ver Causas</button>
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#modalEditar{{ $causa->id }}">Editar</button> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach($causas as $causa)
        <!-- Modal Ver Más -->
        <div class="modal fade" id="modalVerMas{{ $causa->id }}" tabindex="-1" role="dialog" aria-labelledby="modalVerMasLabel{{ $causa->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalVerMasLabel{{ $causa->id }}">Detalles de {{ $causa->adt->user->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Causas básicas: {{ $causa->Causas_basicas }}</p>
                        <p>Causas inmediatas: {{ $causa->Causas_inmediatas }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Editar -->
        <div class="modal fade" id="modalEditar{{ $causa->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel{{ $causa->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditarLabel{{ $causa->id }}">Editar Datos de {{ $causa->adt->user->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('causas.update', $causa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Causas_basicas">Causas Básicas:</label>
                                <input type="text" name="Causas_basicas" id="Causas_basicas" class="form-control" value="{{ $causa->Causas_basicas }}" required>
                            </div>
                            <div class="form-group">
                                <label for="Causas_inmediatas">Causas Inmediatas:</label>
                                <input type="text" name="Causas_inmediatas" id="Causas_inmediatas" class="form-control" value="{{ $causa->Causas_inmediatas }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection