<?php session_start();
        $login = isset($_SESSION['email']);   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/adoption_style.css">
    <link rel="stylesheet" href="../css/navbar2_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <script src="../js/navfootMaker.js"></script>
    <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
    <title>How can I give up for adoption? ∙ La Manada</title>
</head>
<body>
    <div id="navy"></div>
    
    <main>
        <div class="container">
            <div class="text_container">
                <h1>How can I give up for adoption?</h1>
                <p>As La Manada Foundation we appreciate the trust you place in us by giving us your pet for adoption, that is why we provide this series of steps to follow so you can make the process smoothly.</p>
                <div class="steps">
                    <figure id="step1"> 
                        <!--<div style="color: black;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, suscipit dolore est incidunt maiores beatae quis error sint quia. Et, placeat dolor omnis? Delectus, id, minus. Earum, doloremque harum nihil.
                        </div>-->
                        <img id="hidden" src="../src/icons/iniciar-sesion.svg" alt="" width="100px" height="100px">
                        <figcaption>Step 1: Login</figcaption>
                    </figure>
                    <figure> 
                        <img src="../src/icons/pets_species-01.svg" alt="" width="100px" height="100px">
                        <figcaption>Step 2: Select the species you want to give up for adoption</figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/form_icon2.svg" alt="" width="100px" height="100px">
                        <figcaption>Step 3: Complete the form with the requested data</figcaption>
                    </figure>
                </div>
                <div class="steps2">
                   <figure>
                        <img src="../src/icons/photo_step.svg" alt="" width="100px" height="100px">
                        <figcaption>Step 4: Upload at least 3 photos of the pet</figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/check-data.svg" alt="" width="100px" height="100px">
                    <figcaption>Step 5: We will evaluate the data you provided us (it may take time)</figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/find_home.svg" alt="" width="100px" height="100px">
                    <figcaption>Step 6: Ready! If the requirements are met, we will contact you to give us the pet and find a new home for it.</figcaption>
                    </figure>
                </div>
                <a id="back" href="../guides.php">Go back</a>
            </div>

            <div class="img_container">
                <img src="../src/adoption.jpg" alt="">
            </div>
        </div>
    </main>
    <div id="foot"></div>
</body>
</html>