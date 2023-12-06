@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Accidentes de Trabajo Graves o Mortales</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Descripción del Accidente</th>
                <th>Calificación</th>
                <th>Dictamen</th>
                <!-- Agrega más columnas según sea necesario -->
            </tr>
        </thead>
        <tbody>
            <?php
                // Consulta directamente en la vista para obtener accidentes con calificación grave o mortal
                $accidentesGraves = DB::table('adt')
                    ->join('users', 'adt.user_id', '=', 'users.id')
                    ->select('users.name as nombre_usuario', 'adt.descripcion_accidente', 'adt.calificacion_accidente')
                    ->where('adt.calificacion_accidente', 'Grave')
                    ->orWhere('adt.calificacion_accidente', 'Mortal')
                    ->get();
            ?>
            @foreach($accidentesGraves as $accidente)
                <tr>
                    <td>{{ $accidente->nombre_usuario }}</td>
                    <td>{{ $accidente->descripcion_accidente }}</td>
                    <td>{{ $accidente->calificacion_accidente }}</td>
                    <td><a href="{{ route('dictamen')}}" class="btn btn-success">Descargar</a></td>
                    <!-- Agrega más columnas según sea necesario -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
