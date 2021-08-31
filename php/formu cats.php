<?php

$destinatario = 'fundacion.la.manada.sv@gmail.com';

$nombre = $_POST["nombre"];
$email = $_POST['email'];
$mensaje = $_POST ['mensaje'];
$contenido = "Nombre: ". $nombre . "\nCorreo: " . $email . "\nMensaje: " . $mensaje;

mail($destinatario, "Consultas/contacto", $contenido );
header("Location: ../gracias-contacto.html");
?>

<?php

$destinatario = $_POST['email'];
$nombre = $_POST["nombre"];
$contenido = "Muchas Gracias ". $name ."\n\nPor interesarte en salvar a una mascota, Tu solicitud fue enviada con exito, Muy pronto recibiras una respusta por parte nosotros,
 En lo que recibes una respuesta, porque no echas un vistazo por nuestras guias de cuidado para informarte un poco más";

mail($destinatario, "Adopcion/Razones", $contenido );
header("Location: ../gracias.html");
?>