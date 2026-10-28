@extends('layouts.base')

@section('contenido')
<section class="tarjeta">
    <h2>Registrar nuevo juguete</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/juguetes/nuevo') }}" method="POST">
        @csrf

        <p>
            <label for="nombre">Nombre del juguete:</label><br>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
        </p>

        <p>
            <label for="precio">Precio en Bs.:</label><br>
            <input type="number" id="precio" name="precio" value="{{ old('precio') }}">
        </p>

        <p>
            <button type="submit">Registrar juguete</button>
        </p>
    </form>

    <p><a href="{{ url('/juguetes') }}">&larr; Volver</a></p>
</section>
@endsection