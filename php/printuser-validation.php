<?php session_start();
        if(isset($_SESSION['user'])){
                //conexion a la base
                $conexion = new mysqli("localhost","root","","login");
                $userlogged = $_SESSION['user'];
                $db_consulta = "SELECT user, names FROM admin WHERE user = '$userlogged'";
                $result = $conexion->query($db_consulta);
                $printuser = $result->fetch_assoc();
                $username = $printuser['names'];
                $user = $_SESSION['user'];
        }else{
            header('Location: index-login.php');
            die() ;
        }  
 ?>