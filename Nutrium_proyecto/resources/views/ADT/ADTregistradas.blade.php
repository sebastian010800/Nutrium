@extends('layouts.app')
@section('content')
<h2 class="mt-5">Accidentes de Trabajo Registrados</h2>
<table class="table">
    <thead>
        <tr>
            <th>Nombre del Trabajador</th>
            <th>Fecha del Accidente</th>
            <th>Tipo de Accidente</th>
            <th>Descripción del Accidente</th>
        </tr>
    </thead>
    <tbody id="accidentesTable">
        <!-- Los datos de los accidentes se mostrarán aquí -->
    </tbody>
</table>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const accidentesTable = document.getElementById("accidentesTable");
        const epsForm = document.getElementById("epsForm");

        epsForm.addEventListener("submit", function (e) {
            e.preventDefault();

            // Obtener los valores ingresados por el usuario
            const nombreTrabajador = document.getElementById("nombreTrabajador").value;
            const fecha = document.getElementById("fecha").value;
            const tipoAccidente = document.getElementById("tipoAccidente").value;
            const descripcion = document.getElementById("descripcion").value;

            // Crear una nueva fila en la tabla
            const newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td>${nombreTrabajador}</td>
                <td>${fecha}</td>
                <td>${tipoAccidente}</td>
                <td>${descripcion}</td>
            `;

            // Agregar la nueva fila a la tabla
            accidentesTable.appendChild(newRow);

            // Limpiar el formulario después de enviar los datos
            epsForm.reset();
        });
    });
@endsection
