<?php session_start();
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
        <title>Adopción ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>

        <div class="formu">
            <form action="">
                <label for="">¿Cual es tu nombre?:</label>
                <input type="text" placeholder="Ingresa tu nombre" required>
                
                <label for="">¿Cual es el motivo por el que deseas adoptar?:</label>
                <textarea name="" placeholder="Justifica tu respuesta" id="" cols="30" rows="10" required></textarea>
                <button class="boton">Enviar</button>
            </form>
        </div>
        <div id="foot"></div>
    </body>
</html>