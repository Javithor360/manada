<?php session_start();
        $login = isset($_SESSION['email']);   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/footer_style.css">
        <link rel="shortcut icon" href="../../src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../../css/mascotas.css">
        <link rel="stylesheet" href="../../css/navbar2_style.css">
        <script src="../../js/navfootMaker.js"></script>
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
        <title>¡Conoce a Camila! ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
        
        <div class="cont">
            <h1 class="h1">¡Conoce a Camila!</h1>
            <img src="../../src/pets/cat/Camila.png" id="pet_pic">
            <h3>Edad:</h3>
            <p>3 años</p><br>
            <h3>Sexo:</h3>
            <p>Hembra</p><br>
            <h3>Descripcion:</h3>
            <p>
                Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podia cuidarlo por más tiempo,pero espera que seas tu quien lo adopte,
                no pierdas la oprtunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atun
                obedecera casi todo lo que le digas.
            </p><br>
            <h3>¿Deseas Adoptarme?</h3><br>
            <a href="../../pets.php"><button class="boton">Volver</button></a>
            <a href="../../adopt_form.php"><button class="boton">Adoptar</button></a>
        </div><br><br><br>

        <div id="foot"></div>
    </body>
</html>