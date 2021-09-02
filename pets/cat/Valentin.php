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
        <title>¡Meet Valentín! ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>

        <div class="cont">
            <h1 class="h1">¡Meet Valentin!</h1>
            <img src="../../src/pets/cat/Valentin.png" id="pet_pic">
            <h3>Age:</h3>
            <p>1 year</p><br>
            <h3>Sex:</h3>
            <p>Male</p><br>
            <h3>Descripcion:</h3>
            <p>
                This kitten was given to our shelter because his owner couldn't take care of him any longer, but he is waiting for you to adopt him, he likes to take naps, he is a little iperactive but normally he only spends his time playing with his ball of yarn so he won't cause any problem.
            </p><br>
            <h3>¿Do You Want to Adopt Me?</h3><br>
            <a href="../../pets.php"><button class="boton">Back to</button></a>
            <a href="../../adopt_form.php"><button class="boton">Adopt</button></a>
        </div><br><br><br>
        
        <div id="foot"></div>
    </body>
</html>