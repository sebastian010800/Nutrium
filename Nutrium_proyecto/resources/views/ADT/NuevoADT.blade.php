@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>Accidentes de Trabajo</h1>
    <form method="POST" action="{{ route('adt.store')}}">
        @csrf
        <div class="form-group">
            <label for="cedula_trabajador">Cédula del Trabajador:</label>
            <input type="text" class="form-control" id="cedula_trabajador" name="cedula_trabajador">
        </div>
        <div class="form-group">
            <label for="fecha_hora_accidente">Fecha y Hora del Accidente:</label>
            <input type="datetime-local" class="form-control" id="fecha_hora_accidente" name="fecha_hora_accidente">
        </div>
        <div class="form-group">
            <label for="descripcion_accidente">Descripción del Accidente:</label>
            <textarea class="form-control" id="descripcion_accidente" name="descripcion_accidente"></textarea>
        </div>
        <div class="form-group">
            <label for="calificacion_accidente">Calificación del Accidente:</label>
            <input type="number" class="form-control" id="calificacion_accidente" name="calificacion_accidente">
        </div>
        <div class="form-group">
            <label for="id_localidad">Localidad:</label>
            <select class="form-control" id="id_localidad" name="id_localidad">
                @foreach ($localidades as $localidad)
                    <option value="{{ $localidad->id_localidad }}">{{ $localidad->nombre_localidad }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Guardar Accidente</button>
    </form>
</div>

@endsection
