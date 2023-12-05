@extends('layouts.app')
@section('content')
<br>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>ARL</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>ARL Sura</td>
                <td>Pendiente</td>
                <td>
                    <a href="{{ route('descarga_formato') }}" class="btn btn-success">Descargar</a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection