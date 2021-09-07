<?php

$destinatario = 'fundacion.la.manada.sv@gmail.com';

$name = $_POST["name"];
$info = $_POST ['info'];
$email =$_POST['email'];

$contenido = "Hola Soy: ". $name . "\n\nY la razon por la que deseo adoptar es: \n" . $info;

mail($destinatario, "Adopcion/Razones", $contenido );
header("Location: ../gracias.php");
?>

<?php

$destinatario = $_POST['email'];
$name = $_POST["name"];
$contenido = "<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Mensaje</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .container {
      max-width: 1000px;
      width: 90%;
      margin: 0 auto;
    }
    .bg-dark {
      background-image: url(https://cdn.discordapp.com/attachments/840288194691989585/884666081950699550/red-or-white-cat-on-pink-studio-background.jpg);
      background-size: cover;
    }
    .h1{
        margin-top: 0.01%;
        color: white;
        background-color: rgb(43, 43, 43);
        text-align: center;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 40px;
    }
    h3{
        margin-top: 15%;
        float: right;
        margin-right: 50%;
        margin-left: 5%;
        color: white;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 25px;
    }
    h1 img{
        display: block;
        margin: auto;
    }
    h1{
        margin-top: -2%;
        background-color: rgb(32, 32, 32);
    }
    .footer{
      margin-top: 90%;
      color: white;
      background-color: rgb(29, 29, 29);
    }
    
  </style>
</head>
<body>
  <div class='container'>
    <div class='bg-dark'>
        <h1><img src=https://cdn.discordapp.com/attachments/840288194691989585/883606705773092934/ezgif.com-gif-maker.png  height='100px'></h1>
      <h1 class='h1'> Lo sentimos $name </h1>
      <br>
          <h3>Tu solicitud fue rechazada debido a que tu mascota no cumple con los requisitos de nuestra fundacion, lamentamos no poder ayudarte, esperamos encuentre el lugar perfecto para tu mascota
            y gracias por interesarte en el cuido de nuestros amigos peludos.
          </h3>
          <h2></h2>
      <div class='footer'>
        <h4><p>Copyright &copy;2021 Fundación: La Manada. <span>by Grupo 8</span></p></h4>
      </div>
    </div>
  </div>
</body>";
 
$headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($destinatario, "Adopcion/Razones", $contenido,$headers);
header("Location: ../gracias.php");
?>
