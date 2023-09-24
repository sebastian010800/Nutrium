@extends('layouts.app')
@section('content')
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Registro de IPS</h1>
        <form>
            <div class="mb-3">
                <label for="nombreEPS" class="form-label">Nombre de la IPS</label>
                <input type="text" class="form-control" id="nombreEPS" name="nombreEPS" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono de contacto</label>
                <input type="tel" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico de contacto</label>
                <input type="email" class="form-control" id="correo" name="correo">
            </div>
            <button type="submit" class="btn btn-primary">Registrar EPS</button>
        </form>
    </div>

@endsection