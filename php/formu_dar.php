<?php

$destinatario = 'fundacion.la.manada.sv@gmail.com';

$nombre = $_POST["nombre"];
$edad = $_POST ['edad'];
$sexo = $_POST['sexo'];
$vacunas =$_POST['op1'].' '.$_POST['op2'].' '.$_POST['op3'].' '.$_POST['op4'].' '.$_POST['op5'].' '.$_POST['op6'].' '.$_POST['op7'];

$contenido = "La mascota con el nombre de: ". $nombre ."\nDe edad: ". $edad ."\nDe el sexo: ". $sexo ."\nCon las vacunas : \n".$vacunas ."\nEsta esperando que se le brinde un hogar";

mail($destinatario, "Nueva solicitud", $contenido );
header("Location: ../gracias.php");
?>