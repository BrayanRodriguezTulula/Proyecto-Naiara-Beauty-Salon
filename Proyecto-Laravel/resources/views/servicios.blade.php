@extends('layouts.base')

@section('contenido')
<section class="tarjeta">
    <h2>Nuestros Servicios</h2>
    <p>Hay <strong>{{ count($servicios) }}</strong> servicios guardados en la base de datos</p>
    <ul>
        @foreach ($servicios as $servicio)
            <li>{{ $servicio->nombre }} — Bs {{ $servicio->precio }}</li>
        @endforeach
    </ul>
    <p style="margin-top: 1.5rem;">
        <a href="{{ url('/servicios/nuevo') }}">+ Agregar un servicio</a>
    </p>
</section>
@endsection