<?php
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mascota = $_POST["mascota"];
    
    echo "<h2>Turno reservado en la Veterinaria Patitas</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Correo: $correo</p>";
    echo "<p>Mascota: $mascota</p>";

    $servicios = [
        "Consulta general - Bs. 60",
        "Vacuna antirrabica - Bs. 40",
        "Baño y corte - Bs. 50"
    ];
    echo "<h3>Servicios disponibles:</h3>";
    foreach ($servicios as $servicio) {
        echo "<li>$servicio</li>";
    }

    echo "<p>Te atiendio Brayan Rodriguez Tulula</p>";
?>
