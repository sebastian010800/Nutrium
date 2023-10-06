@extends('layouts.app')
@section('content')
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Registro de IPS</h1>
        <form method="POST" action="{{ route('ips.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nombreIPS" class="form-label">Nombre de la IPS</label>
                <input type="text" class="form-control" id="nombreIPS" name="nombreIPS" required>
            </div>
            <div class="mb-3">
                <label for="telefonoIPS" class="form-label">Teléfono de contacto</label>
                <input type="tel" class="form-control" id="telefonoIPS" name="telefonoIPS">
            </div>
            <div class="mb-3">
                <label for="direccionIPS" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccionIPS" name="direccionIPS">
            </div>
            <div class="mb-3">
                <label for="correoIPS" class="form-label">Correo electrónico de contacto</label>
                <input type="email" class="form-control" id="correoIPS" name="correoIPS">
            </div>
            <button type="submit" class="btn btn-primary">Registrar IPS</button>
        </form>
    </div>
</body>
@endsection