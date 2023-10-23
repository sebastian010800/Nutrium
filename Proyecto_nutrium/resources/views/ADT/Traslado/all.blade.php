@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Información de Accidentes</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Hora del traslado</th>
                <th>Fecha del traslado</th>
                <th>Fecha del Accidente</th>
                <th>Hora del Accidente</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($traslados as $traslado)
                <tr>
                    <td>{{ $traslado->adt->user->name }}</td>
                    <td>{{ $traslado->hora_traslado }}</td>
                    <td>{{ $traslado->fecha_traslado }}</td>
                    <td>{{ $traslado->adt->fecha_accidente }}</td>
                    <td>{{ $traslado->adt->hora_accidente }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Placa de Ambulancia</th>
                <th>Nombre del paramedico</th>
                <th>IPS</th>
            </tr>

        </thead>
        <tbody>
            @foreach($traslados as $traslado)
            <tr>
                <td>{{ $traslado->placa_ambulancia }}</td>
                <td>{{ $traslado->nombre_paramedicos }}</td>
                <td>{{ $traslado->ips->nombre_ips }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('Nuevo_traslado') }}" class="btn btn-primary">Nuevo traslado</a>
</div>
@endsection
