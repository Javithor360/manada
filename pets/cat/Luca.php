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
        <script src="../../js/crearboton.js"></script>
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
        <script type="text/javascript">window.username = "<?php echo $username ?>";</script>
        <title>¡Conoce a Luca! ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
<div class="fBody">
        <div class="cont">
            <h1 class="h1">¡Conoce a Luca!</h1>
            <img src="../../src/pets/cat/Luca.png" id="pet_pic">
            <h3>Edad:</h3>
            <p>1 años</p><br>
            <h3>Sexo:</h3>
            <p>Macho</p><br>
            <h3>Descripcion:</h3>
            <p>
                Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podia cuidarlo por más tiempo,pero espera que seas tu quien lo adopte,
                no pierdas la oprtunidad, le gusta jugar mucho, le gusta estar siempre al lado de su dueño y si tu lo llamas por su nombre vendra
                de inmediato.
            </p><br>
            <h3>¿Deseas Adoptarme?</h3><br>
            <a href="../../pets.php"><button class="boton">Volver</button></a>
            <span id="boton">
        </div>
</div>
        <div id="foot"></div>
    </body>
</html>