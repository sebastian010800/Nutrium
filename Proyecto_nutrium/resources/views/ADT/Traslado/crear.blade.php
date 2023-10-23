@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registro de Traslado</h2>
    <form action="{{ route('Guardar.store')}}" method="post">
        @csrf <!-- Agrega el token CSRF para protección -->

        <div class="form-group">
            <label for="hora_traslado">Hora de Traslado</label>
            <input type="time" class="form-control" id="hora_traslado" name="hora_traslado" required>
        </div>

        <div class="form-group">
            <label for="fecha_traslado">Fecha de Traslado</label>
            <input type="date" class="form-control" id="fecha_traslado" name="fecha_traslado" required>
        </div>

        <div class="form-group">
            <label for="placa_ambulancia">Placa de la Ambulancia</label>
            <input type="text" class="form-control" id="placa_ambulancia" name="placa_ambulancia" required>
        </div>

        <div class="form-group">
            <label for="nombre_paramedicos">Nombre de los Paramédicos</label>
            <input type="text" class="form-control" id="nombre_paramedicos" name="nombre_paramedicos" required>
        </div>

        <div class="form-group">
            <label for="ips_id">IPS</label>
            <select class="form-control" id="ips_id" name="ips_id" required>
                <option value="">Seleccionar IPS</option>
                @foreach($ips as $ip)
                    <option value="{{ $ip->id }}">{{ $ip->nombre_ips }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="adt_id">ADT</label>
            <select class="form-control" id="adt_id" name="adt_id" required>
                <option value="">Seleccionar ADT</option>
                @foreach($adts as $adt)
                    <option value="{{ $adt->id }}">{{ $adt->fecha_accidente }}-{{ $adt->user->name}} </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Traslado</button>
    </form>
</div>
@endsection
