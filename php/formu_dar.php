<?php session_start();
    require 'username-conexion.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $namePet = $_POST['nombre'];
        $edad = $_POST['edad'];
        $genero = $_POST['sexo'];
        $owner = $username;
        $vacunas = '';

        $type = 'Gato ['.$genero.']';

        $error='';  

        
    }
?>
