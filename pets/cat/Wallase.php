<?php  session_start();
        require '../../php/username-conexion.php';
        include('../../php/define_lang.php');
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
        <script type="text/javascript">window.navfoot = { button: { success: "<?php echo $cat['CatButton2']?>", fail: "<?php echo $cat['CatButtonLogin']?>" }, lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>", logout: "<?php echo $navbar['logout'] ?>", profile: "<?php echo $navbar['profile'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
        <title><?php echo $cat ['CatHeaderTitle'] ?> Wallase ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
<div class="fBody">
        <div class="cont">
            <h1 class="h1"><?php echo $cat ['CatHeaderTitle'] ?> Wallase</h1>
            <img src="../../src/pets/cat/wallase.png" id="pet_pic">
            <h3><?php echo $cat ['CatStep1'] ?></h3>
            <p>5 <?php echo $cat ['CatStep1Desc'] ?></p><br>
            <h3><?php echo $cat ['CatStep2'] ?></h3>
            <p><?php echo $cat ['CatStep2Desc1'] ?></p><br>
            <h3><?php echo $cat ['CatStep2.5'] ?></h3>
            <p>Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podia cuidarlo por más tiempo,pero espera que seas tu quien lo adopte,
                no pierdas la oprtunidad, le gusta que lo acaricien la espalda y que lo alimenten con su comida favorita el pollo aunque es un poco dormilon.
            </p><br>
            <h3><?php echo $cat ['CatStep3'] ?></h3><br>
            <a href="../../pets.php"><button class="boton"><?php echo $cat ['CatBottom1'] ?></button></a>
            <span id="boton"></span>
        </div>
</div>
        <div id="foot"></div>
    </body>
</html>