@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#ipsMenu">
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
            <button class="btn btn-success btn-block" data-toggle="collapse" data-target="#consultasMenu">
                Consultas
            </button>
            <div id="consultasMenu" class="collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                      Planimetria de la empresa
                    </li>
                    <li class="list-group-item">
                      <a href="{{ route('Usuarios') }}">Datos basicos de los empleados</a>
                    </li>
                    <li class="list-group-item">Datos de afiliacion a EPS</li>
                    <li class="list-group-item">Datos de contratacion de los empleados</li>
                    <li class="list-group-item">Formatos de afiliacion a la ARL</li>
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
            <button class="btn btn-danger btn-block" data-toggle="collapse" data-target="#accidentesMenu">
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
                        Otras opciones de accidentes de trabajo
                    </li>
                    <ul id="otrasOpcionesMenu" class="list-group collapse">
                        <li class="list-group-item">
                            <a href="{{ route('Valoraciones')}}">Valoracion</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('Traslados') }}">Datos del traslado</a>
                        </li>
                        <li class="list-group-item">Evidencias del accidente</li>
                        <li class="list-group-item">Causas básicas</li>
                        <li class="list-group-item">Causas inmediatas</li>
                        <li class="list-group-item">Informe final</li>
                        <li class="list-group-item">Dictamen de pérdida de capacidad laboral del trabajador</li>
                        <li class="list-group-item">Copia de la prestación económica</li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
