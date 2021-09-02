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
        <title>Adoptation ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>

        <div class="formu">
            <form action="php/forms_adopt.php" method="POST">
                <label for="">What's your name?:</label>
                <input type="text" name="name" placeholder="Type your name" required>

                <label for="">E-mail address:</label>
                <input type="text" name="email" placeholder="Type your email address" required>
                
                <label for="">Why do you want to adopt?:</label>
                <textarea name="info" placeholder="Tell us why are you interested!" id="" cols="30" rows="10" required></textarea>
                <button class="boton">Send</button>
            </form>
        </div>
        <div id="foot"></div>
    </body>
</html>