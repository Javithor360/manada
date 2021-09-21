<?php
         
         if (!function_exists('str_contains')) {
                function str_contains(string $haystack, string $needle): bool
                {
                    return '' === $needle || false !== strpos($haystack, $needle);
                }
        }

        if(str_contains($_SERVER['SCRIPT_FILENAME'], '/pets/')){ $pathway = '../../denied.php'; }
        else if(str_contains($_SERVER['SCRIPT_FILENAME'], '/guides/') || str_contains($_SERVER['SCRIPT_FILENAME'], '/admin/')) { $pathway = '../denied.php'; }
        else if(str_contains($_SERVER['SCRIPT_FILENAME'], '/php/')) { $pathway = '../denied.php'; }
        else { $pathway = './denied.php'; }

        if(isset($_SESSION['email'])){
                //conexion a la base
                $conexion = new mysqli("localhost","root","","login");
                $emaillogged = $_SESSION['email'];
                $db_consulta = "SELECT email, name, lastNames, gender, tel, bD FROM usuarioslogin WHERE email = '$emaillogged'";
                $result = $conexion->query($db_consulta);
                $printuser = $result->fetch_assoc();
                $username = $printuser['name'] . " " . $printuser['lastNames'];
                $mail = $printuser['email'];
                $tel = $printuser['tel'];
                $bD = $printuser['bD'];
                $gender = $printuser['gender'];
        }else{
                $username = 'Not found...';
        }
        //$login = isset($_SESSION['email']);
        if(str_contains($_SERVER['SCRIPT_FILENAME'], 'cat_form') || str_contains($_SERVER['SCRIPT_FILENAME'], 'dog_form') || str_contains($_SERVER['SCRIPT_FILENAME'], 'adopt_form') || str_contains($_SERVER['SCRIPT_FILENAME'], 'entrada') || str_contains($_SERVER['SCRIPT_FILENAME'], 'salida')){ 
                if(isset($_SESSION['email']) == 1){
                        $login = isset($_SESSION['email']); 
                }else{
                        include($pathway);
                        die();
                }
        } else { 
                $login = isset($_SESSION['email']);
        }
?>