<?php

$destinatario = 'fundacion.la.manada.sv@gmail.com';

$nombre = $_POST["nombre"];
$email = $_POST['email'];
$mensaje = $_POST ['mensaje'];
$contenido = "Nombre: ". $nombre . "\nCorreo: " . $email . "\nMensaje: " . $mensaje;

mail($destinatario, "Consultas/contacto", $contenido );
header("Location: ../gracias-contacto.php");
?>

<?php

$destinatario = $_POST['email'];
$nombre = $_POST["nombre"];
$contenido = "Muchas Gracias ". $nombre ."\n\nPor tu mensaje, espera a que alguien de nuestra fundacion te responda  para ponerce en contacto y obtener mayor informacion";

mail($destinatario, "Consultas/contacto", $contenido );
header("Location: ../gracias.php");
?>