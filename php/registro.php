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
        
        if (empty($name) or empty($lastNames) or empty($gender) or empty($email) or empty($pw) or empty($pwc) or empty($tel) or empty($bD)){

            $error .= '<i style="color:red;">Debes rellenar todos los campos</i>';

        }else{
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
            
            $statement = $conexion->prepare('SELECT * FROM usuarioslogin WHERE email = :email LIMIT 1');
            $statement->execute(array(':email' => $email));
            $resultado = $statement->fetch();
            
                        
            if ($resultado != false){
                $error .= '<i style="color:red;">Este usuario ya existe</i>';
            }
            
            if ($pw != $pwc){
                $error .= '<i style="color:red;"> Las contraseñas no coinciden</i>';
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
            
            $error .= '<i style="color: green;">Usuario registrado exitosamente</i>';
        }
    }


    require '../form_signup.php';

?>