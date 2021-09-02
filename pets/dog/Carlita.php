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
        <title>¡Meet Carlita! ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
        
        <div class="cont">
            <h1 class="h1">¡Meet Carlita!</h1>
            <img src="../../src/pets/dog/Carlita.png" id="pet_pic">
            <h3>Age:</h3>
            <p>1 year</p><br>
            <h3>Gender:</h3>
            <p>Female</p><br>
            <h3>Description:</h3>
            <p>
                This dog was given to our shelter because his owner could not take care of him any longer, but he is waiting for you to adopt him, It is a very affectionate dog likes to be in the company of someone always and is trained to sleep where you designate, she is very tender dog.
            </p><br>
            <h3>Do You Want to Adopt Me?</h3><br>
            <a href="../../pets.php"><button class="boton">Go back</button></a>
            <a href="../../adopt_form.php"><button class="boton">Adopt</button></a>
        </div><br><br><br>
        
        <div id="foot"></div>
    </body>
</html>