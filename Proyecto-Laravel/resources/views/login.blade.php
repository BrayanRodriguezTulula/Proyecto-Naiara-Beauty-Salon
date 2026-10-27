@extends('layouts.base')

@section('contenido')
<section class="tarjeta" style="max-width: 450px; margin: 2rem auto;">
    <h2>Entrar al panel</h2>

    @if (session('error'))
        <p style="color: #ba0020;"><strong>{{ session('error') }}</strong></p>
    @endif

    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <p>
            <label for="email">Correo:</label><br>
            <input type="email" id="email" name="email" placeholder="Ingrese el correo" required style="width: 100%;">
        </p>
        <p>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required style="width: 100%;">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</section>
@endsection