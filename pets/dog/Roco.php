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
        <title>¡Meet Roco! ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
        
        <div class="cont">
            <h1 class="h1">¡Meet Roco!</h1>
            <img src="../../src/pets/dog/Roco.png" id="pet_pic">
            <h3>Age:</h3>
            <p>2 years old</p><br>
            <h3>Gender:</h3>
            <p>Male</p><br>
            <h3>Description:</h3>
            <p>
                This dog was given to our shelter because his owner could not take care of him any longer, but he is waiting for you to adopt him, don't miss the opportunity. He is a puppy that likes to be taken for a walk, his favorite food is chicken croquettes with vegetables and he likes to play ball
            </p><br>
            <h3>Do You Want to Adopt Me?</h3><br>
            <a href="../../pets.php"><button class="boton">Go back</button></a>
            <a href="../../adopt_form.php"><button class="boton">Adopt</button></a>
        </div><br><br><br>
        
        <div id="foot"></div>
    </body>
</html>