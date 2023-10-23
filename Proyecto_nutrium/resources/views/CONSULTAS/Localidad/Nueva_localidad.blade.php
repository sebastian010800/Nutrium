@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Ingresar Datos de Nueva Localidad</h2>
    <form action="{{ route('Guardar.store') }}" method="post">
        @csrf <!-- Agrega el token CSRF para protección -->
        <div class="form-group">
            <label for="nombre_localidad">Nombre de la Localidad</label>
            <input type="text" class="form-control" id="nombre_localidad" name="nombre_localidad" required>
        </div>
        <div class="form-group">
            <label for="descripcion_localidad">Descripción de la Localidad</label>
            <textarea class="form-control" id="descripcion_localidad" name="descripcion_localidad" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Localidad</button>
    </form>
</div>
@endsection
