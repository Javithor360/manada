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
        <title>¡Conoce a Liliana! ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
        
        <div class="cont">
            <h1 class="h1">¡Conoce a Liliana!</h1>
            <img src="../../src/pets/dog/Liliana.png" id="pet_pic">
            <h3>Edad:</h3>
            <p>4 años</p><br>
            <h3>Sexo:</h3>
            <p>Hembra</p><br>
            <h3>Descripcion:</h3>
            <p>
                Este perrito fue entregada a nuestro refugio ya que su dueña no podia cuidarlo por más tiempo,pero espera que seas tu quien lo adopte,
                no pierdas la oprtunidad, Esta perrita es una gran corredora, es un poco iperactiva, le gusta que la saquen a pasear y la lleven a que
                le corten el pelo.
            </p><br>
            <h3>¿Deseas Adoptarme?</h3><br>
            <a href="../../pets.php"><button class="boton">Volver</button></a>
            <a href="../../adopt_form.php"><button class="boton">Adoptar</button></a>
        </div><br><br><br>
        
        <div id="foot"></div>
    </body>
</html>