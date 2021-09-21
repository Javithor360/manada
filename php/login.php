<?php session_start();

    if(isset($_SESSION['email'])) {
        header('location: index.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $email = $_POST['email'];
        $pw = $_POST['pw'];
        $pw = hash('sha512', $pw);
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        
        $statement = $conexion->prepare('
        SELECT * FROM usuarioslogin WHERE email = :email AND pw = :pw'
        );
        
        $statement->execute(array(
            ':email' => $email,
            ':pw' => $pw
        ));
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            $_SESSION['email'] = $email;
            header('location: ../index.php');
        }else{
            
            if($_SESSION['lang'] == 'es'){
                $error .= '<i style="color:red;">Correo electrónico y/o contraseña incorrectos</i>';
            }else if($_SESSION['lang'] == 'en'){
                $error = '<i style="color: red;">Incorrect email or password</i><br>';
            }
        }
    }
    
include('define_lang.php');    
require '../form_login.php';


?>