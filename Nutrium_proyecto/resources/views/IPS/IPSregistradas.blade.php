@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">IPS registradas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre de la IPS</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Correo electrónico</th>
            </tr>
        </thead>
        <tbody id="ipsData">
            @foreach($ips as $ipsItem)
            <tr>
                <td>{{ $ipsItem->nombre_ips }}</td>
                <td>{{ $ipsItem->telefono_ips }}</td>
                <td>{{ $ipsItem->direccion_ips }}</td>
                <td>{{ $ipsItem->correo_electronico_ips }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection