<?php
         
        if(isset($_SESSION['email'])){
                //conexion a la base
                $conexion = new mysqli("localhost","root","","login");
                $emaillogged = $_SESSION['email'];
                $db_consulta = "SELECT email, name, lastNames, tel, bD FROM usuarioslogin WHERE email = '$emaillogged'";
                $result = $conexion->query($db_consulta);
                $printuser = $result->fetch_assoc();
                $username = $printuser['name'] . " " . $printuser['lastNames'];
                $mail = $printuser['email'];
                $tel = $printuser['tel'];
        }else{
                $username = 'Not found...';
        }
        $login = isset($_SESSION['email']);
?>