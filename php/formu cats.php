<?php

$destinatario = 'luisernestomr1503@gmail.com';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$info = ['info'];

$header = "Consultas manada";
$mesajecompleto =  $info . "\nAtentamente :".$nombre;
 
mail($destinatario, $mensajecompleto, $header );

echo"<sript>alert(Su mensaje a sido enviado correctamente)</script>";
echo"<sript>setTimeot(\"location.href='index.html'\",1000)</script>";
?>