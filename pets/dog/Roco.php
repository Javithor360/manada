<?php  session_start();
        require '../../php/username-conexion.php';
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
        <script type="text/javascript">window.username = "<?php echo $username ?>";</script>
        <title>¡Conoce a Roco! ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
        
        <div class="cont">
            <h1 class="h1">¡Conoce a Roco!</h1>
            <img src="../../src/pets/dog/Roco.png" id="pet_pic">
            <h3>Edad:</h3>
            <p>2 años</p><br>
            <h3>Sexo:</h3>
            <p>Macho</p><br>
            <h3>Descripcion:</h3>
            <p>
                Este perrito fue entregada a nuestro refugio ya que su dueña no podia cuidarlo por más tiempo,pero espera que seas tu quien lo adopte,
                no pierdas la oprtunidad, Es un perrito que le gusta que lo lleven de paseo, su comida favorita son las croquetas de pollo con verduras
                y le gusta jugar a la pelota.
            </p><br>
            <h3>¿Deseas Adoptarme?</h3><br>
            <a href="../../pets.php"><button class="boton">Volver</button></a>
            <a href="../../adopt_form.php"><button class="boton">Adoptar</button></a>
        </div><br><br><br>
        
        <div id="foot"></div>
    </body>
</html>