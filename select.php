<?php  session_start();
        require 'php/username-conexion.php';
        include('php/define_lang.php');
 ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/seleccion.css">
        <link rel="stylesheet" href="./css/navbar2_style.css">
        <link rel="stylesheet" href="./css/footer_style.css">
        <script src="./js/navfootMaker.js"></script>
        <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
        <title><?php echo $select ['pagSelectTitle'] ?></title>
    </head>
    <body>
        <div id="navy"></div>
        

        <section>
            <img class="img" src="./src/select_upsidePuppy.png">
            <div class="intro">
                <h1> <?php echo $select ['SelectHeaderTitle'] ?> </h1>
                <p>
                     <?php echo $select ['SelectHeaderDesc'] ?>
               </p>
            </div>

            <div class="art1">
                <img class="leftImg" src="./src/select_supercat.png">
                <h1> <?php echo $select ['SelectSubHeaderTitle'] ?> </h1>
                <p>
                    <?php echo $select ['SelectSubHeaderDesc'] ?>
                </p>
            </div>

            <div class="select">
                <h1> <?php echo $select ['SelectPetTitle'] ?> </h1>
                <p> <?php echo $select ['SelectPetesc'] ?> </p>
                <span>
                    <a href="./cat_form.php"><img class="zoom" src="./src/cat.svg" alt="¡Quiero poner en adopción a mi gato!"></a>
                    <a href="./dog_form.php"><img class="zoom" src="./src/perroo.svg" alt="¡Quiero poner en adopción a mi gato!"></a>
                </span>
            </div>
        </section>
        <div id="foot"></div>
    </body>
</html>