@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Registrar una nueva IPS</h2>
    <form action="{{ route('Guardar_ips.store') }}" method="post">
        @csrf <!-- Agrega el token CSRF para protección -->
        <div class="form-group">
            <label for="nombre_ips">Nombre de la IPS</label>
            <input type="text" class="form-control" id="nombre_ips" name="nombre_ips" required>
        </div>
        <div class="form-group">
            <label for="direccion_ips">Dirección de la IPS</label>
            <input type="text" class="form-control" id="direccion_ips" name="direccion_ips" required>
        </div>
        <div class="form-group">
            <label for="correo_ips">Correo de la IPS</label>
            <input type="email" class="form-control" id="correo_ips" name="correo_ips" required>
        </div>
        <div class="form-group">
            <label for="telefono_ips">Teléfono de la IPS</label>
            <input type="tel" class="form-control" id="telefono_ips" name="telefono_ips" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar IPS</button>
    </form>
</div>
@endsection
