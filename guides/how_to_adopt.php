<?php session_start();
        $login = isset($_SESSION['email']);   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/how_to_adopt_style.css">
    <link rel="stylesheet" href="../css/navbar2_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <script src="../js/navfootMaker.js"></script>
    <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
    <title>How can I adopt? ∙ La Manada</title>
</head>
<body>
    <div id="navy"></div>

    <main>
        <div class="container">
            <div class="text_container">
                <h1>How can I adopt?</h1>
                <p>In La Manada Foundation we offer the service of animal adoption in an easy and simple way, if you want to find a new furry member to your family follow the steps that we show you below and you will see that soon you will have your furry friend enjoying with you at home.</p>
                <div class="steps">
                    <figure id="step1"> 
                        <!--<div style="color: black;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, suscipit dolore est incidunt maiores beatae quis error sint quia. Et, placeat dolor omnis? Delectus, id, minus. Earum, doloremque harum nihil.
                        </div>-->
                        <img id="hidden" src="../src/icons/iniciar-sesion.svg" alt="" width="100px" height="100px">
                        <figcaption>Step 1: Login</figcaption>
                    </figure>
                    <figure> 
                        <img src="../src/icons/pets-01.svg" alt="" width="100px" height="100px">
                        <figcaption>Step 2: Select the species</figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/huella2.svg" alt="" width="100px" height="100px">
                        <figcaption>Step 3: Look for your new best friend</figcaption>
                    </figure>
                </div>
                <div class="steps2">
                   <figure>
                        <img src="../src/icons/form_icon.svg" alt="" width="100px" height="100px">
                        <figcaption>Step 4: Complete the form with the requested data</figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/mail_icon1.svg" alt="" width="100px" height="100px">
                    <figcaption>Step 5: Wait for the confirmation for to adopt in your email</figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/done.svg" alt="" width="100px" height="100px">
                    <figcaption>Step 6: Ready! You can pick up your new pet whenever you want!</figcaption>
                    </figure>
                </div>
                <a id="back" href="../guides.php">Go back</a>
            </div>
            <div class="img_container">
                <img src="../src/adopt_img.jpg" alt="">
            </div>
        </div>
    </main>
    <div id="foot"></div>
</body>
</html>