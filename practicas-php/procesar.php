<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$comentario = $_POST["comentario"];

echo "<h2>¡Comentario recibido exitosamente! </h2>";
echo "<p> Nombre: $nombre </p>";
echo "<p> Correo: $correo </p>";
echo "<p> Comentario: $comentario </p>";
?>