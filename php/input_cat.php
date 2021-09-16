<?php
    require 'username-conexion.php';
    $conexion=mysqli_connect('localhost','root','','admin',);

    if (isset($_POST['send'])){

        $namePet = $_POST['nombre'];
        $age = $_POST['edad'];
        $genero = $_POST['sexo'];
        $nameOwner = $username;
        $emailOwner = $mail;
        $vacunas = '';

        if (isset($_POST['op1'])){
            $vacunas = $vacunas.' '. $_POST['op1'];
        }
        if (isset($_POST['op2'])){
            if(!empty($vacunas)){
                $vacunas = $vacunas.', '.$_POST['op2'];
            }else{
                $vacunas = $vacunas.' '. $_POST['op2'];
            }
        }
        if (isset($_POST['op3'])){
            if(!empty($vacunas)){
                $vacunas = $vacunas.', '.$_POST['op3'];
            }else{
                $vacunas = $vacunas.' '. $_POST['op3'];
            }
        }
        if (isset($_POST['op4'])){
            if(!empty($vacunas)){
                $vacunas = $vacunas.', '.$_POST['op4'];
            }else{
                $vacunas = $vacunas.' '. $_POST['op4'];
            }
        }
        if (isset($_POST['op5'])){
            if(!empty($vacunas)){
                $vacunas = $vacunas.', '.$_POST['op5'];
            }else{
                $vacunas = $vacunas.' '. $_POST['op5'];
            }
        }
        if (isset($_POST['op6'])){
            if(!empty($vacunas)){
                $vacunas = $vacunas.', '.$_POST['op6'];
            }else{
                $vacunas = $vacunas.' '. $_POST['op6'];
            }
        }
        if (isset($_POST['op7'])){
            if(!empty($vacunas)){
                $vacunas = $vacunas.', '.$_POST['op7'];
            }else{
                $vacunas = $vacunas.' '. $_POST['op7'];
            }
        }

        if (empty($vacunas)){
            $vacunas = 'Ninguna';
        }

        $type = 'Gato ['.$genero.']';
        $resultado = null;

        $query="INSERT INTO input(IdEntrada, nameOwner, emailOwner, namePet, type, age, vacunas) VALUES (null,'$nameOwner','$emailOwner','$namePet','$type','$age','$vacunas')";
        $resultado = mysqli_query($conexion,$query);
        
        header("Location: gracias.php");
    }
?>
