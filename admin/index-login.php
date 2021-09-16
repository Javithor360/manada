<?php session_start();

    if(isset($_SESSION['user'])) {
        header('location: entrada.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        
        $statement = $conexion->prepare('
        SELECT * FROM admin WHERE user = :user AND pass = :pass'
        );
        
        $statement->execute(array(
            ':user' => $user,
            ':pass' => $pass
        ));
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            $_SESSION['user'] = $user;
            header('location: ../admin/entrada.php');
        }else{
            $error .= '<i style="color:#EC7063;">Credenciales inválidas, intente de nuevo</i>';
        }
    }
    
require '../php/login_frontend.php';


?>