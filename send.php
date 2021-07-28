<?php

$destino = 'abdou.bousiyd@gmail.com';
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$continedo = 'Nombre: ' . $nombre . '\nemail: ' . $correo . '\ntelefono: ' . $telefono . '\nmensaje: ' . $mensaje;
mail($destino,'Contacto', $continedo)

?>