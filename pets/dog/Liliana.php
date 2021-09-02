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
        <title>¡Meet Liliana! ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
        
        <div class="cont">
            <h1 class="h1">¡Meet Liliana!</h1>
            <img src="../../src/pets/dog/Liliana.png" id="pet_pic">
            <h3>Age:</h3>
            <p>4 years old</p><br>
            <h3>Gender:</h3>
            <p>Female</p><br>
            <h3>Description:</h3>
            <p>
                This doggy was given to our shelter because her owner couldn't take care of her any longer, but she is waiting for you to adopt her, don't miss the opportunity. This doggy is a great runner, she is a little bit hyperactive, she likes to be taken for a walk and to have her hair cut.
            </p><br>
            <h3>Do You Want to Adopt Me?</h3><br>
            <a href="../../pets.php"><button class="boton">Go back</button></a>
            <a href="../../adopt_form.php"><button class="boton">Adopt</button></a>
        </div><br><br><br>
        
        <div id="foot"></div>
    </body>
</html>