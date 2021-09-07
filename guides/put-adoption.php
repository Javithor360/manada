<?php  session_start();
        require '../php/username-conexion.php';
        include('../php/define_lang.php');
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
    <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
    <title><?php echo $putadoption['pagePutAdoptTitle'] ?></title>
</head>
<body>
    <div id="navy"></div>
    
    <main>
        <div class="container">
            <div class="text_container">
                <h1> <?php echo $putadoption ['PutAdoptHeaderTitle'] ?></h1>
                <p> <?php echo $putadoption ['PutAdoptHeaderDesc'] ?> </p>
                <div class="steps">
                    <figure id="step1"> 
                        <!--<div style="color: black;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, suscipit dolore est incidunt maiores beatae quis error sint quia. Et, placeat dolor omnis? Delectus, id, minus. Earum, doloremque harum nihil.
                        </div>-->
                        <img id="hidden" src="../src/icons/iniciar-sesion.svg" alt="" width="100px" height="100px">
                        <figcaption> <?php echo $putadoption ['PutAdoptStep1'] ?> </figcaption>
                    </figure>
                    <figure> 
                        <img src="../src/icons/pets_species-01.svg" alt="" width="100px" height="100px">
                        <figcaption> <?php echo $putadoption ['PutAdoptStep2'] ?> </figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/form_icon2.svg" alt="" width="100px" height="100px">
                        <figcaption> <?php echo $putadoption ['PutAdoptStep3'] ?> </figcaption>
                    </figure>
                </div>
                <div class="steps2">
                   <figure>
                        <img src="../src/icons/photo_step.svg" alt="" width="100px" height="100px">
                        <figcaption> <?php echo $putadoption ['PutAdoptStep4'] ?> </figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/check-data.svg" alt="" width="100px" height="100px">
                    <figcaption> <?php echo $putadoption ['PutAdoptStep5'] ?> </figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/find_home.svg" alt="" width="100px" height="100px">
                    <figcaption ><?php echo $putadoption ['PutAdoptStep6'] ?> </figcaption>
                    </figure>
                </div>
                <a id="back" href="../guides.php"><?php echo $putadoption ['GoBackButton'] ?></a>
            </div>

            <div class="img_container">
                <img src="../src/adoption.jpg" alt="">
            </div>
        </div>
    </main>
    <div id="foot"></div>
</body>
</html>