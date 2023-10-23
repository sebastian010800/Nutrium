@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar un Nuevo Accidente</h2>
    <form action="{{ route('Guardar.store')}}" method="post">
        @csrf <!-- Agrega el token CSRF para protección -->

        <div class="form-group">
            <label for="user_id">Usuario</label>
            <select class="form-control" id="user_id" name="user_id">
                @foreach($users as $user)
                    <option>-</option>
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="hora_accidente">Hora del Accidente</label>
            <input type="time" class="form-control" id="hora_accidente" name="hora_accidente" required>
        </div>

        <div class="form-group">
            <label for="fecha_accidente">Fecha del Accidente</label>
            <input type="date" class="form-control" id="fecha_accidente" name="fecha_accidente" required>
        </div>

        <div class="form-group">
            <label for="descripcion_accidente">Descripción del Accidente</label>
            <textarea class="form-control" id="descripcion_accidente" name="descripcion_accidente" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="calificacion_accidente">Calificación del Accidente</label>
            <select class="form-control" id="calificacion_accidente" name="calificacion_accidente" required>
                <option>-</option>
                <option value="Leve">Leve</option>
                <option value="Grave">Grave</option>
                <option value="Mortal">Mortal</option>
            </select>
        </div>

        <div class="form-group">
            <label for="localidad_accidente">Localidad del Accidente</label>
            <select class="form-control" id="localidad_accidente" name="localidad_accidente">
                @foreach($localidades as $localidad)
                    <option >-</option>
                    <option value="{{ $localidad->id }}">{{ $localidad->nombre_localidad }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Accidente</button>
    </form>
</div>
@endsection
