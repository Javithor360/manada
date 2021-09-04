<?php  session_start();
        require 'php/username-conexion.php';
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

        <div class="formu" onSubmit="document.getElementById('enviar').disabled=true;">
            <form action="php/forms_adopt.php" method="POST">
                <label for="">¿Cual es tu nombre?:</label>
                <input type="text" name="name" placeholder="Ingresa tu nombre" required>

                <label for="">Correo Electronico:</label>
                <input type="text" name="email" placeholder="Ingresa tu correo" required>
                
                <label for="">¿Cual es el motivo por el que deseas adoptar?:</label>
                <textarea name="info" placeholder="Justifica tu respuesta" id="" cols="30" rows="10" required></textarea>
                <button id="enviar" type="submit" class="boton">Enviar</button>
            </form>
        </div>
        <div id="foot"></div>
    </body>
</html>