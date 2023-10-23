@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registro de Investigadores en Accidentes</h2>
    <form action="{{ route('Guardar.store') }}" method="post">
        @csrf <!-- Agrega el token CSRF para protección -->
        
        <div class="form-group">
            <label for="nombre_investigador">Nombre del Investigador</label>
            <input type="text" class="form-control" id="nombre_investigador" name="nombre_investigador" required>
        </div>
        
        <div class="form-group">
            <label for="tipo_investigador">Tipo de Investigador</label>
            <select class="form-control" id="tipo_investigador" name="tipo_investigador" required>
                <option>-</option>
                <option value="profesional_sst">Profesional con Licencia en SST</option>
                <option value="integrante_copasst">Integrante del COPASST</option>
                <option value="tecnico_sst">Técnico Capacitado en SST</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="numero_licencia">Número de Licencia</label>
            <input type="text" class="form-control" id="numero_licencia" name="numero_licencia" required>
        </div>
        
        <div class="form-group">
            <label for="aplica_cargo">¿Aplica Cargo?</label>
            <select class="form-control" id="aplica_cargo" name="aplica_cargo" required>
                <option>-</option>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar Investigador</button>
    </form>
</div>
@endsection
