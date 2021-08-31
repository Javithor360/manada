<?php

$destinatario = 'fundacion.la.manada.sv@gmail.com';

$nombre = $_POST["nombre"];
$edad = $_POST ['edad'];
$sexo = $_POST['sexo'];
$vacunas =$_POST['op1'].' '.$_POST['op2'].' '.$_POST['op3'].' '.$_POST['op4'].' '.$_POST['op5'].' '.$_POST['op6'].' '.$_POST['op7'];

$contenido = "La mascota con el nombre de: ". $nombre ."\nDe edad: ". $edad ."\nDe el sexo: ". $sexo ."\nCon las vacunas : \n".$vacunas ."\nEsta esperando que se le brinde un hogar";

mail($destinatario, "Nueva solicitud", $contenido );
<<<<<<< HEAD
header("Location: ../gracias.html");
?>
<?php

$destinatario = $_POST['email'];
$name = $_POST["name"];
$contenido = "Muchas Gracias ". $name ."\n\nPor interesarte en salvar a una mascota, Tu solicitud fue enviada con exito, Muy pronto recibiras una respusta por parte nosotros,
 En lo que recibes una respuesta, porque no echas un vistazo por nuestras guias de cuidado para informarte un poco más";

mail($destinatario, "Adopcion/Razones", $contenido );
header("Location: ../gracias.html");
=======
header("Location: ../gracias.php");
>>>>>>> 87aa792dfcffaf7e81af220c521eeeff8bfbdb11
?>