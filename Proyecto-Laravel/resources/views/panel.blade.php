@extends('layouts.base')

@section('contenido')
<section class="tarjeta">
    <h2>Hola, {{ auth()->user()->name }}</h2>

    <p>Entraste con <strong>{{ auth()->user()->email }}</strong>. Esta página no existe para quien no tenga acceso.</p>

    <h3>Tus servicios ({{ count($servicios) }})</h3>

    <ul>
        @foreach ($servicios as $servicio)
            <li>{{ $servicio->nombre }} — Bs {{ $servicio->precio }}</li>
        @endforeach
    </ul>

    <p style="margin-top: 1.5rem;">
        <a href="{{ url('/servicios/nuevo') }}">+Agregar un servicio</a>
    </p>
    
    <form action="{{ url('/logout') }}" method="POST" style="margin-top: 2rem;">
        @csrf
        <button type="submit">Salir</button>
    </form>
</section>
@endsection