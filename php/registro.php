<?php session_start();

    if(isset($_SESSION['email'])) {
        header('location: index.php');
    }

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $name = $_POST['name'];
        $lastNames = $_POST['lastNames'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $pw = $_POST['pw'];
        $pwc = $_POST['pwc'];
        $tel = $_POST['tel'];
        $bD = $_POST['bD'];
        
        $pw = hash('sha512', $pw);
        $pwc = hash('sha512', $pwc);
        
        $error = '';
        
        
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
            
            $statement = $conexion->prepare('SELECT * FROM usuarioslogin WHERE email = :email LIMIT 1');
            $statement->execute(array(':email' => $email));
            $resultado = $statement->fetch();
            
                        
            if ($resultado != false){
                if($_SESSION['lang'] == 'es'){
                    $error .= '<i style="color:red;">Este usuario ya existe</i><br>';
                }else if($_SESSION['lang'] == 'en'){
                    $error = '<i style="color: red;">This user already exists</i><br>';
                }
            }
            
            if ($pw != $pwc){
                if($_SESSION['lang'] == 'es'){
                   $error .= '<i style="color:red;"> Las contraseñas no coinciden</i><br>';
                }else if($_SESSION['lang'] == 'en'){
                    $error = '<i style="color: red;">Passwords do not match</i><br>';
                }
            }

        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO usuarioslogin (id, name, lastNames,  gender, email, pw, tel, bD) VALUES (null, :name, :lastNames, :gender,  :email, :pw, :tel , :bD)');
            $statement->execute(array(
                
                ':name' => $name,
                ':lastNames' => $lastNames,
                ':gender' => $gender,
                ':email' => $email,
                ':pw' => $pw,
                ':tel' => $tel,
                ':bD' => $bD

                
            ));
            if($_SESSION['lang'] == 'es'){
                $error = '<i style="color: green;">Usuario registrado exitosamente</i><br>';
            }else if($_SESSION['lang'] == 'en'){
                $error = '<i style="color: green;">Successfully registered user</i><br>';
            }
            
        }
    }

    include('define_lang.php');
    require '../form_signup.php';

?>