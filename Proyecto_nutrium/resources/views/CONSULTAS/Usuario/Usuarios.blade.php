@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Usuarios Registrados</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Correo Electrónico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $dato)
            <tr>
                <td>{{ $dato->user->name }}</td>
                <td>{{ $dato->user->cedula }}</td>
                <td>{{ $dato->user->email }}</td>
                <td>
                    <button class="btn btn-success" data-toggle="modal" data-target="#modalVerMas{{ $dato->id }}">Ver más</button>
                    <button class="btn btn-secondary" data-toggle="modal" data-target="#modalEditar{{ $dato->id }}">Editar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Ventana modal para "Ver más" -->
@foreach($datos as $dato)
<div class="modal fade" id="modalVerMas{{ $dato->id }}" tabindex="-1" role="dialog" aria-labelledby="modalVerMasLabel{{ $dato->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVerMasLabel{{ $dato->id }}">Detalles de {{ $dato->user->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Fecha de Nacimiento: {{ $dato->fecha_nacimiento }}</p>
                <p>Género: {{ $dato->genero }}</p>
                <p>Celular: {{ $dato->celular }}</p>
                <p>Dirección: {{ $dato->direccion }}</p>
                <p>EPS {{ $dato->eps }}</p>
                <p>Nombre de Contacto de Emergencia: {{ $dato->contacto_emergencia_nombre }}</p>
                <p>Celular de Contacto de Emergencia: {{ $dato->contacto_emergencia_telefono }}</p>
                <p>Peso: {{ $dato->peso }} KG</p>
                <p>Altura: {{ $dato->altura }} M</p>
                <p>Grupo Sanguíneo: {{ $dato->grupo_sanguineo }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- Ventana modal para "Editar" (aquí debes crear el formulario de edición) -->
<div class="modal fade" id="modalEditar{{ $dato->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel{{ $dato->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarLabel{{ $dato->id }}">Editar Datos de {{ $dato->user->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('datos.update', $dato->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Utiliza 'PUT' para el método de actualización -->

                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $dato->fecha_nacimiento }}" required>
                    </div>

                    <div class="form-group">
                        <label for="genero">Género:</label>
                        <select name="genero" id="genero" class="form-control" required>
                            <option >-</option>
                            <option value="Masculino" {{ $dato->genero === 'Masculino' ? 'selected' : '' }}>Masculino</option>
                            <option value="Femenino" {{ $dato->genero === 'Femenino' ? 'selected' : '' }}>Femenino</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="celular">Celular:</label>
                        <input type="text" name="celular" id="celular" class="form-control" value="{{ $dato->celular }}" required>
                    </div>

                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" name="direccion" id="direccion" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="eps">eps:</label>
                        <select name="eps" id="eps" class="form-control" required>
                            <option >-</option>
                            <option value="Sura" {{ $dato->eps === 'Sura' ? 'selected' : '' }}>Sura</option>
                            <option value="Nueva_Eps" {{ $dato->eps === 'Nueva_Eps' ? 'selected' : '' }}>Nueva Eps</option>
                            <option value="Coomeva" {{ $dato->eps === 'Coomeva' ? 'selected' : '' }}>Coomeva</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="contacto_emergencia_nombre">Nombre de Contacto de Emergencia:</label>
                        <input type="text" name="contacto_emergencia_nombre" id="contacto_emergencia_nombre" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="contacto_emergencia_telefono">Celular de Contacto de Emergencia:</label>
                        <input type="text" name="contacto_emergencia_telefono" id="contacto_emergencia_telefono" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="peso">Peso:</label>
                        <input type="text" name="peso" id="peso" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="altura">Altura:</label>
                        <input type="text" name="altura" id="altura" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="grupo_sanguineo">Grupo Sanguíneo:</label>
                        <input type="text" name="grupo_sanguineo" id="grupo_sanguineo" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </form>

            </div>
            
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Obtén todos los botones "Ver más" y "Editar"
        const verMasButtons = document.querySelectorAll('.btn-success');
        const editarButtons = document.querySelectorAll('.btn-secondary');

        // Asigna un controlador de eventos a cada botón "Ver más"
        verMasButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Obtiene el ID del botón y construye el ID de la ventana modal correspondiente
                const datoId = button.dataset.datoId;
                const modalId = `#modalVerMas${datoId}`;

                // Abre la ventana modal
                $(modalId).modal('show');
            });
        });

        // Asigna un controlador de eventos a cada botón "Editar"
        editarButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Obtiene el ID del botón y construye el ID de la ventana modal correspondiente
                const datoId = button.dataset.datoId;
                const modalId = `#modalEditar${datoId}`;

                // Abre la ventana modal de edición
                $(modalId).modal('show');
            });
        });
    });
</script>



@endsection
