@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de IPS Registradas</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Correo</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ips as $ips)
            <tr>
                <td>{{ $ips->nombre_ips }}</td>
                <td>{{ $ips->direccion_ips }}</td>
                <td>{{ $ips->correo_ips }}</td>
                <td>{{ $ips->telefono_ips }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
