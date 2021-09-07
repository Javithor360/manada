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
        <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
        <title>¡<?php echo $dog ['DogHeaderTitle'] ?> Roco! ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
<div class="fBody">
        <div class="cont">
            <h1 class="h1">¡<?php echo $dog ['DogHeaderTitle'] ?> Roco!</h1>
            <img src="../../src/pets/dog/Roco.png" id="pet_pic">
            <h3><?php echo $dog ['DogStep1'] ?></h3>
            <p>2 <?php echo $dog ['DogStep1Desc'] ?></p><br>
            <h3><?php echo $dog ['DogStep2'] ?></h3>
            <p><?php echo $dog ['DogStep2Desc1'] ?></p><br>
            <h3>Descripcion:</h3>
            <p>
                Este perrito fue entregada a nuestro refugio ya que su dueña no podia cuidarlo por más tiempo,pero espera que seas tu quien lo adopte,
                no pierdas la oprtunidad, Es un perrito que le gusta que lo lleven de paseo, su comida favorita son las croquetas de pollo con verduras
                y le gusta jugar a la pelota.
            </p><br>
            <h3><?php echo $dog ['DogStep3'] ?></h3><br>
            <a href="../../pets.php"><button class="boton"><?php echo $dog ['DogBottom1'] ?></button></a>
            <span id="boton">
        </div>
</div>
        
        <div id="foot"></div>
    </body>
</html>