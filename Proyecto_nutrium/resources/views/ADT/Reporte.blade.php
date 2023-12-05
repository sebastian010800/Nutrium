@extends('layouts.app')

@section('content')
@php
$results = DB::select("
        SELECT users.name as nombre, datos.eps, users.id
        FROM adt
        JOIN users ON adt.user_id = users.id
        LEFT JOIN datos ON users.id = datos.user_id
    ");
@endphp
<br>
<div class="container">
    <table class="table table-bordered">
        <thead class="thead-success">
            <tr>
                <th scope="col">Empleado</th>
                <th scope="col">EPS</th>
                <th scope="col">Informe</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->nombre }}</td>
                    <td>{{ $result->eps ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('informe_final') }}" class="btn btn-success">Ver Informe</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection