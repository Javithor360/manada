<?php  session_start();
        require '../php/username-conexion.php';
        include('../php/define_lang.php');
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
    <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
    <title>¿Cómo Adoptar? ∙ La Manada</title>
</head>
<body>
    <div id="navy"></div>

    <main>
        <div class="container">
            <div class="text_container">
                <h1> <?php echo $howtoadopt ['AdoptHeaderTitle'] ?> </h1>
                <p> <?php echo $howtoadopt ['AdoptHeaderDesc'] ?> </p>
                <div class="steps">
                    <figure id="step1"> 
                        <!--<div style="color: black;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, suscipit dolore est incidunt maiores beatae quis error sint quia. Et, placeat dolor omnis? Delectus, id, minus. Earum, doloremque harum nihil.
                        </div>-->
                        <img id="hidden" src="../src/icons/iniciar-sesion.svg" alt="" width="100px" height="100px">
                        <figcaption> <?php echo $howtoadopt ['AdoptStep1'] ?> </figcaption>
                    </figure>
                    <figure> 
                        <img src="../src/icons/pets-01.svg" alt="" width="100px" height="100px">
                        <figcaption> <?php echo $howtoadopt ['AdoptStep2'] ?></figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/huella2.svg" alt="" width="100px" height="100px">
                        <figcaption> <?php echo $howtoadopt ['AdoptStep3'] ?></figcaption>
                    </figure>
                </div>
                <div class="steps2">
                   <figure>
                        <img src="../src/icons/form_icon.svg" alt="" width="100px" height="100px">
                        <figcaption> <?php echo $howtoadopt ['AdoptStep4'] ?></figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/mail_icon1.svg" alt="" width="100px" height="100px">
                    <figcaption> <?php echo $howtoadopt ['AdoptStep5'] ?></figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/done.svg" alt="" width="100px" height="100px">
                    <figcaption> <?php echo $howtoadopt ['AdoptStep6'] ?></figcaption>
                    </figure>
                </div>
                <a id="back" href="../guides.php"> <?php echo $howtoadopt ['GoBackButton'] ?></a>
            </div>
            <div class="img_container">
                <img src="../src/adopt_img.jpg" alt="">
            </div>
        </div>
    </main>
    <div id="foot"></div>
</body>
</html>