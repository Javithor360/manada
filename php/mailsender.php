<?php

$destinatario = 'fundacion.la.manada.sv@gmail.com';

$nombre = $_POST["nombre"];
$email = $_POST['email'];
$mensaje = $_POST ['mensaje'];
$contenido = "Nombre: ". $nombre . "\nCorreo: " . $email . "\nMensaje: " . $mensaje;

mail($destinatario, "Consultas/contacto", $contenido );
header("Location: ../gracias-contacto.php");
?>