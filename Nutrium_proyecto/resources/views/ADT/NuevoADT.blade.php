@extends('layouts.app')
@section('content')
<div class="container mt-5">
        <h1 class="mb-4">Registro de Accidente de Trabajo</h1>
        <form>
            <div class="mb-3">
                <label for="nombreTrabajador" class="form-label">Nombre del Trabajador</label>
                <input type="text" class="form-control" id="nombreTrabajador" name="nombreTrabajador" required>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha del Accidente</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="mb-3">
                <label for="tipoAccidente" class="form-label">Tipo de Accidente</label>
                <select class="form-select" id="tipoAccidente" name="tipoAccidente" required>
                    <option value="">Seleccionar...</option>
                    <option value="Caída">Caída</option>
                    <option value="Lesión">Lesión</option>
                    <option value="Quemadura">Quemadura</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción del Accidente</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Accidente</button>
        </form>
    </div>
@endsection
