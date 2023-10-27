@extends('layouts.app')
@section('content')
    <!-- Encabezado con imagen -->
    <header class="jumbotron jumbotron-fluid" style="background-color: #5CB85C;">
        <div class="container text-center">
            <h1 class="display-4 font-weight-bold text-white">Bienvenido a Nutrium</h1>
            <p class="lead text-white">Tu solución de nutrición y salud</p>
        </div>
    </header>

    <!-- Sección de servicios -->
    <section class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                <img src="{{ asset('images/Tropical_Fruits_Pure.png') }}" alt="Logo de Nutrium" >
                    <div class="card-body">
                        <h5 class="card-title">Tropical Fruits Pure</h5>
                        <p class="card-text">Contamos con más de 20 años de experiencia en la comercialización y el procesamiento de pulpa de frutas tropicales, ofreciéndole al mercado materia prima de uso industrial para la elaboración de néctares, mermeladas, jaleas, helados, entre otros productos a base de fruta.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                <img src="{{ asset('images/Nutriumsalsas.png') }}" alt="Logo de Nutrium" >
                    <div class="card-body">
                        <h5 class="card-title">Bari Salsas</h5>
                        <p class="card-text">Nuestra unidades de negocio son Nutrimenti, Dipsa y Nutrium, dedicadas a la comercialización y producción de salsas, sazonadoras, aderezos, snacks, compotas, gelatinas y pulpas de fruta con ventas en Colombia y exportando a más de 20 países.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                <img src="{{ asset('images/Natura_baby.png') }}" alt="Logo de Nutrium" >
                    <div class="card-body">
                        <h5 class="card-title">Natura baby</h5>
                        <p class="card-text">Compotas de verdad para super mamás, hechas con pulpa 100% de fruta, además no contiene almidones, conservantes, ni azúcares adicionados. Con el respaldo de Hit, una de las marcas de bebidas con fruta más reconocida y querida de Colombia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="container-fluid bg-dark text-white text-center py-3">
        <p>&copy; 2023 Nutrium. Todos los derechos reservados.</p>
    </footer>

    <!-- Agrega enlaces a los archivos JavaScript de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection

