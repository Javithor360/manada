<?php session_start();
         
        if(isset($_SESSION['email'])){
                //conexion a la base
                $conexion = new mysqli("localhost","root","","login");
                $emaillogged = $_SESSION['email'];
                $db_consulta = "SELECT email, name, lastNames FROM usuarioslogin WHERE email = '$emaillogged'";
                $result = $conexion->query($db_consulta);
                $printuser = $result->fetch_assoc();
                $username = $printuser['name'] . " " . $printuser['lastNames'];
        }
        $login = isset($_SESSION['email']);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/footer_style.css">
        <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/navbar2_style.css">
        <link rel="stylesheet" href="./css/adopcion.css">
        <script src="./js/navfootMaker.js"></script>
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
        <script type="text/javascript">window.username = "<?php echo $username ?>";</script>
        <title>Adopción ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>

        <div class="formu">
            <form action="php/forms_adopt.php" method="POST">
                <label for="">¿Cual es tu nombre?:</label>
                <input type="text" name="name" placeholder="Ingresa tu nombre" required>

                <label for="">Correo Electronico:</label>
                <input type="text" name="email" placeholder="Ingresa tu correo" required>
                
                <label for="">¿Cual es el motivo por el que deseas adoptar?:</label>
                <textarea name="info" placeholder="Justifica tu respuesta" id="" cols="30" rows="10" required></textarea>
                <button class="boton">Enviar</button>
            </form>
        </div>
        <div id="foot"></div>
    </body>
</html>