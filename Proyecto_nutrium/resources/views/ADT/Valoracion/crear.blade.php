@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registro de Valoración</h2>
    <form action="{{ route('Guardar_v.store') }}" method="post">
        @csrf <!-- Agrega el token CSRF para protección -->

        <div class="form-group">
            <label for="valoracion_primaria">Valoración Primaria</label>
            <textarea class="form-control" id="valoracion_primaria" name="valoracion_primaria" required></textarea>
        </div>

        <div class="form-group">
            <label for="valoracion_secundaria">Valoración Secundaria</label>
            <textarea class="form-control" id="valoracion_secundaria" name="valoracion_secundaria" required></textarea>
        </div>

        <div class="form-group">
            <label for="investigador_id">ID del Investigador</label>
            <select class="form-control" id="investigador_id" name="investigador_id" required>
                <option value="">Seleccionar investigador</option>
                @foreach($investigadores as $investigador)
                    <option value="{{ $investigador->id }}">{{ $investigador->nombre_investigador }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="adt_id">Accidente de trabajo</label>
            <select class="form-control" id="adt_id" name="adt_id" required>
                <option value="">Seleccionar accidente</option>
                @foreach($adts as $adt)
                    <option value="{{ $adt->id }}">{{ $adt->user->name }} {{ $adt->fecha_accidente }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Valoración</button>
    </form>
</div>
@endsection
