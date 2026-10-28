@extends('layouts.base')

@section('contenido')
<section class="tarjeta">
    <h2>Nuestros Juguetes</h2>

    <p>HOLA Bienvenidos a Jugueteria El Trompo, tu lugar favorito de la ciudad que cuenta con los mejores juguetes tradicionales y modernos.</p>
    <p>Hay <strong>{{ count($juguetes) }}</strong> juguetes en el estante.</p>

    <ul>
        @foreach ($juguetes as $juguete)
            <li>{{ $juguete->nombre }} — Bs {{ $juguete->precio }}</li>
        @endforeach
    </ul>

    <p> Estante atendido por Brayan Rodriguez Tulula </p>

    <p>
        <a href="{{ url('/juguetes/nuevo') }}">+ Agregar un juguete</a>
    </p>
</section>
@endsection