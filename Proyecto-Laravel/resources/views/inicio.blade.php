@extends('layouts.base')

@section('contenido')
<section id="inicio" class="tarjeta">
    <h1>Tu belleza es nuestra prioridad</h1>
</section>

<section id="servicios-destacados" class="tarjeta">
    <h2>Nuestros Servicios Destacados</h2>
    <p>Catálogo de servicios destacados de Naiara Beauty Salon:</p>
    <ul>
        @foreach ($servicios as $servicio)
            <li>{{ $servicio }}</li>
        @endforeach
    </ul>
</section>
@endsection