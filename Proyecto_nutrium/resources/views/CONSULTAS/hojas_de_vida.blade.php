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
                <td>Lavadora 1</td>
                <td>Lavadora de rodillos</td>
                <td>15/02/2018</td>
                <td>29/10/2022</td>
                <td>Lavadora de rodillos de acero inoxidable para eliminar impurezas de la fruta</td>
                <td><a href="#" class="btn btn-success">Descargar</a></td>
            </tr> 
            <tr>
                <td>Cortadora 2</td>
                <td>Cortadora de rodajas</td>
                <td>14/06/2020</td>
                <td>08/11/2022</td>
                <td>Cortadora automática para generar rodajas uniformes de fruta para envasado</td>
                <td><a href="#" class="btn btn-success">Descargar</a></td>
            </tr>
            <tr>
                <td>Envasadora 3</td>
                <td>Envasadora al vacío</td>
                <td>25/04/2021</td>
                <td>10/12/2022</td>
                <td>Envasadora al vacío con inyector de gases para extender la vida útil de la fruta envasada</td>
                <td><a href="#" class="btn btn-success">Descargar</a></td>
            </tr>
            <!-- Agrega más filas según sea necesario -->
        </tbody>
    </table>
</div>
@endsection