<?php

$destinatario = 'fundacion.la.manada.sv@gmail.com';

$nombre = $_POST["nombre"];
$edad = $_POST ['edad'];
$sexo = $_POST['sexo'];
$vacunas =$_POST['opc1'].''.$_POST['opc2'].''.$_POST['opc3'].''.$_POST['opc4'].''.$_POST['opc5'].''.$_POST['opc6'].''.$_POST['opc7'];

$contenido = "La mascota con el nombre de: ". $nombre ."\nDe edad: ". $edad ."\nDe el sexo: ". $sexo ."\nCon las vacunas : \n".$vacunas ."\nEsta esperando que se le brinde un hogar";

mail($destinatario, "Nueva solicitud", $contenido );
header("Location: ../gracias.html");
?>