@extends('layouts.base')

@section('contenido')
<section id="contacto" class="tarjeta">
    <h2>Contáctanos</h2>
    <p>¿Quieres sugerir algún cambio? Escríbenos.</p>
    <form id="form-contacto" novalidate method="post" action="#">
        @csrf
        <label for="nombre">Nombre completo</label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre y apellido" required>

        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="correo" placeholder="tunombre@correo.com" required>

        <label for="comentario">Tu comentario</label>
        <textarea id="comentario" name="comentario" rows="4" placeholder="Cuéntanos tu experiencia en el Salon!"></textarea>

        <button type="submit">Enviar comentario</button>
        <p id="error-contacto" class="aviso"></p>
    </form>
</section>
@endsection