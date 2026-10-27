@extends('layouts.base')

@section('contenido')
<section class="tarjeta">
    <h2>Agregar un servicio</h2>

    <form action="{{ url('/servicios/nuevo') }}" method="POST">
        @csrf
        <p>
            <label for="nombre">Nombre del servicio:</label><br>
            <input type="text" id="nombre" name="nombre" placeholder="Ej. Maquillaje social" required>
        </p>
        <p>
            <label for="precio">Precio en Bs:</label><br>
            <input type="number" id="precio" name="precio" placeholder="Ej. 80" required>
        </p>
        <p>
            <button type="submit">Guardar servicio</button>
        </p>
    </form>

    <p><a href="{{ url('/servicios') }}">&larr; Volver a la lista</a></p>
</section>
@endsection