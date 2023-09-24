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
        <tbody id="epsData">
            <!-- Los datos ingresados se mostrarán aquí -->
        </tbody>
    </table>
</div>
@endsection