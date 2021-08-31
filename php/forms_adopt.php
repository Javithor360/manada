<?php

$destinatario = 'fundacion.la.manada.sv@gmail.com';

$name = $_POST["name"];
$info = $_POST ['info'];
$email =$_POST['email'];

$contenido = "Hola Soy: ". $name . "\n\nY la razon por la que deseo adoptar es: \n" . $info;

mail($destinatario, "Adopcion/Razones", $contenido );
header("Location: ../gracias.html");
?>

<?php

$destinatario = $_POST['email'];
$name = $_POST["name"];
$contenido = "Muchas Gracias ". $name ."\n\nPor interesarte en salvar a una mascota, Tu solicitud fue enviada con exito, Muy pronto recibiras una respusta por parte nosotros,
 En lo que recibes una respuesta, porque no echas un vistazo por nuestras guias de cuidado para informarte un poco más";

mail($destinatario, "Adopcion/Razones", $contenido );
header("Location: ../gracias.html");
?>