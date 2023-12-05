@extends('layouts.app')

@section('content')
<style>
.centered-background {
    background-image: url('{{ asset('images/Fondo_empleados.png') }}');
    background-size: 100% 100%;
    background-position: center center;
    background-attachment: fixed;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
    opacity: 0.5; /* Reduce la visibilidad al 60% (puedes ajustar este valor) */
}


</style>

<div class="centered-background"></div>

<div class="container" style="padding-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <button class="btn btn-primary custom-button" data-toggle="collapse" data-target="#ipsMenu">
                IPS
            </button>
            <div id="ipsMenu" class="collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ route('IPS_registradas') }}">Listado de las IPS registradas</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('Nueva_IPS') }}">Registrar nueva IPS</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <button class="btn btn-success custom-button btn-block" data-toggle="collapse" data-target="#consultasMenu">
                Consultas
            </button>
            <div id="consultasMenu" class="collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ route('hojas_de_vida') }}">Hojas de vida de los equipos</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('Usuarios') }}">Datos básicos de los empleados</a>
                    </li>
                    <li class="list-group-item">Datos de afiliación a EPS</li>
                    <li class="list-group-item">Datos de contratación de los empleados</li>
                    
                    <li class="list-group-item">
                        <a href="{{ route('formato_afiliacion') }}">Estado de afiliacion</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('Investigadores')}}">Consultar investigadores</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('Localidades') }}">Datos de localidades</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <button class="btn btn-danger btn-block custom-button" data-toggle="collapse" data-target="#accidentesMenu">
                Accidentes de Trabajo
            </button>
            <div id="accidentesMenu" class="collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ route('Adt_registrados') }}">Casos registrados</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('Nuevo_adt') }}">Registrar nuevo caso</a>
                    </li>
                    <li class="list-group-item" data-toggle="collapse" data-target="#otrasOpcionesMenu">
                        <button class="btn">
                            <a href="#">Otras opciones de accidentes de trabajo</a>
                        </button>
                    </li>
                    <ul id="otrasOpcionesMenu" class="list-group collapse">
                        <li class="list-group-item">
                            <a href="{{ route('Valoraciones')}}">Valoración</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('Traslados') }}">Datos del traslado</a>
                        </li>
                        <li class="list-group-item">Evidencias del accidente</li>
                        <li class="list-group-item">
                            <a href="{{ route('causas')}}">Causas del accidente</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('Reporte_final')}}">Reporte final</a>
                        </li>
                        <li class="list-group-item">Dictamen de pérdida de capacidad laboral del trabajador</li>
                        <li class="list-group-item">Copia de la prestación económica</li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function descargarPdf() {
        
        // Construye la URL del controlador con la opción seleccionada.
        var urlPdf = "{{ route('formato_afiliacion') }}";

        // Actualiza el atributo href del enlace con la nueva URL.
        document.getElementById("enlacePdf").href = urlPdf;

        // Abre el enlace en una nueva ventana o pestaña.
        window.open(urlPdf, '_blank');
    }
</script>
@endsection
