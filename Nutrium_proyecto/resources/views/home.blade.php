@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="col">
                    <button id="IPS" type="button" class="btn btn-success" onclick="BotonIPS()">IPS</button>
                </div>
                <br><br><br>
                <div class="col">
                    <button type="button" class="btn btn-success" onclick="BotonConsultas()">CONSULTAS</button>
                </div>
                <br><br><br>
                <div class="col">
                    <button type="button" class="btn btn-success" onclick="BotonADT()">ACCIDENTES DE TRABAJO</button>
                </div>
                <br><br><br>
                <div id="OpcionesIPS" style="display: none;">
                    <!-- Botones adicionales -->
                    <p><a href="{{ route('IPSregistradas') }}" class="link-underline-success">Listado de IPS registradas</a></p>
                    <p><a href="{{ route('NuevaIPS') }}" class="link-underline-success">Registrar nueva IPS</a></p>    
                </div>
                <div id="OpcionesConsultas" style="display: none;">
                    <!-- Botones adicionales -->
                    <p><a href="#" class="link-underline-success">Planimetria de la empresa</a></p>
                    <p><a href="{{ route('User') }}" class="link-underline-success">Datos basicos de los empleados</a></p>
                    <p><a href="#" class="link-underline-success">Datos de afiliacion a EPS</a></p>
                    <p><a href="#" class="link-underline-success">Datos de contratación</a></p>
                    <p><a href="#" class="link-underline-success">Formato afiliacion EPS</a></p>
                    <p><a href="#" class="link-underline-success">Hoja de vida equipos</a></p>
                    <p><a href="#" class="link-underline-success">Formato de afiliacion ARL</a></p>
                    <p><a href="#" class="link-underline-success">Seguimiento traslado</a></p>
                </div>

                <div id="OpcionesADT" style="display: none;">
                    <p><a href="{{ route('ADTregistrados') }}" class="link-underline-success">Casos Registrados</a></p>                 
                    <p><a href="{{ route('NuevoADT') }}" class="link-underline-success">Registrar nuevo caso</a></p>
                    <p><a href="#" class="link-underline-success">Otras Opciones</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var contenedorIPS = document.getElementById("OpcionesIPS");
    var contenedorConsultas = document.getElementById("OpcionesConsultas");
    var contenedorADT = document.getElementById("OpcionesADT");

    function BotonIPS() {
        if (contenedorIPS.style.display === "none") {
            contenedorIPS.style.display = "block";
            contenedorConsultas.style.display = "none"; // Ocultar el otro contenedor
            contenedorADT.style.display = "none";
        } else {
            contenedorIPS.style.display = "none";
        }
    }

    function BotonConsultas() {
        if (contenedorConsultas.style.display === "none") {
            contenedorConsultas.style.display = "block";
            contenedorIPS.style.display = "none"; // Ocultar el otro contenedor
            contenedorADT.style.display = "none";
        } else {
            contenedorConsultas.style.display = "none";
        }
    }

    function BotonADT(){
        if (contenedorADT.style.display === "none") {
            contenedorADT.style.display = "block";
            contenedorIPS.style.display = "none"; // Ocultar el otro contenedor
            contenedorConsultas.style.display = "none";
        } else {
            contenedorADT.style.display = "none";
        }
    }
</script>
@endsection
