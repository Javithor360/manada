<?php  session_start();
        require '../../php/username-conexion.php';
        include('../../php/define_lang.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="../../src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../../css/navbar2_style.css">
        <link rel="stylesheet" href="../../css/footer_style.css">
        <link rel="stylesheet" href="../../css/mascotas.css">
        <script src="../../js/navfootMaker.js"></script>
        <script type="text/javascript">window.navfoot = { button: { success: "<?php echo $dog['DogButton2']?>", fail: "<?php echo $dog['DogButtonLogin']?>" }, lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>", logout: "<?php echo $navbar['logout'] ?>", profile: "<?php echo $navbar['profile'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
        <title><?php echo $dog ['DogHeaderTitle'] ?> Kiara ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
<div class="fBody">
        <div class="cont">
            <h1 class="h1"><?php echo $dog ['DogHeaderTitle'] ?> Kiara</h1>
            <img src="../../src/pets/dog/kiara.png" id="pet_pic">
            <h3><?php echo $dog ['DogStep1'] ?></h3>
            <p>5 <?php echo $dog ['DogStep1Desc'] ?></p><br>
            <h3><?php echo $dog ['DogStep2'] ?></h3>
            <p><?php echo $dog ['DogStep2Desc2'] ?></p><br>
            <h3><?php echo $dog ['DogStep2.5'] ?></h3>
            <p>
                Este perrito fue entregada a nuestro refugio ya que su dueña no podia cuidarlo por más tiempo,pero espera que seas tu quien lo adopte,
                no pierdas la oprtunidad, es un perrito muy cariñosoy muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante
                pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilon pero cuando despierta es muy juguetón.
            </p><br>
            <h3><?php echo $dog ['DogStep3'] ?></h3><br>
            <a href="../../pets.php"><button class="boton"><?php echo $dog ['DogBottom1'] ?></button></a>
            <span id="boton"></span>
        </div>
</div>
        <div id="foot"></div>
    </body>
</html>