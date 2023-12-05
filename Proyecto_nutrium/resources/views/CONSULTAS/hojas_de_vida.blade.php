@extends('layouts.app')
@section('content')
<br>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Máquina</th>
                <th scope="col">Tipo</th>
                <th scope="col">Fecha de Compra</th>
                <th scope="col">Último Mantenimiento</th>
                <th scope="col">Descripción General</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Computadora 1</td>
                <td>Desktop</td>
                <td>2022-01-15</td>
                <td>2022-08-20</td>
                <td>Computadora de uso general en el departamento de ventas.</td>
                <td>
                    <a href="{{ route('descarga_formato') }}" class="btn btn-success">Descargar</a>
                </td>
            </tr>
            <tr>
                <td>Impresora 1</td>
                <td>Láser</td>
                <td>2021-03-10</td>
                <td>2022-09-30</td>
                <td>Impresora utilizada para imprimir documentos administrativos.</td>
                <td>
                    <a href="" class="btn btn-success">Descargar</a>
                </td>
            </tr>
            <!-- Agrega más filas según sea necesario -->
        </tbody>
    </table>
</div>
@endsection