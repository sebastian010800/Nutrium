@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Locaciones</h1>

    <!-- Botón para abrir el formulario de nueva locación -->
    <button class="btn btn-primary mb-3" id="btnAgregarLocacion">Agregar Nueva Localidad</button>

    <!-- Formulario para agregar nueva locación (inicialmente oculto) -->
    <form method="POST" action="{{ route('localidad.store') }}" id="formularioNuevaLocacion" style="display: none;">
        @csrf
        <div class="form-group">
            <label for="nombre_localidad">Nombre de la Locación:</label>
            <input type="text" class="form-control" id="nombre_localidad" name="nombre_localidad">
        </div>
        <div class="form-group">
            <label for="descripcion_localidad">Descripción de la Locación:</label>
            <textarea class="form-control" id="descripcion_localidad" name="descripcion_localidad"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Locación</button>
    </form>

    <br>

    <!-- Lista de locaciones existentes -->
    <table class="table">
        <thead>
            <tr>
                <th>Nombre de la Locación</th>
                <th>Descripción de la Locación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locaciones as $locacion)
                <tr>
                    <td>{{ $locacion->nombre_localidad }}</td>
                    <td>{{ $locacion->descripcion_localidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    // JavaScript para mostrar/ocultar el formulario al hacer clic en el botón
    var btnAgregarLocacion = document.getElementById('btnAgregarLocacion');
    var formularioNuevaLocacion = document.getElementById('formularioNuevaLocacion');
    var formularioVisible = false;

    btnAgregarLocacion.addEventListener('click', function () {
        if (formularioVisible) {
            formularioNuevaLocacion.style.display = 'none';
        } else {
            formularioNuevaLocacion.style.display = 'block';
        }
        formularioVisible = !formularioVisible;
    });
</script>

@endsection
