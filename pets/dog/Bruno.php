<?php  session_start();
        require '../../php/username-conexion.php';
        include('../../php/define_lang.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="../../src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../../css/mascotas.css">
        <link rel="stylesheet" href="../../css/navbar2_style.css">
        <link rel="stylesheet" href="../../css/footer_style.css">
        <script src="../../js/navfootMaker.js"></script>
        <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
        <title>¡Conoce a Bruno! ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
<div class="fBod">
        <div class="cont">
            <h1 class="h1">¡Conoce a Bruno!</h1>
            <img id="pet_pic" src="../../src/pets/dog/Bruno.png">
            <h3>Edad:</h3>
            <p>2 años</p><br>
            <h3>Sexo:</h3>
            <p>Macho</p><br>
            <h3>Descripción:</h3>
            <p>
                Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo,pero espera que seas tú quien lo adopte,
                no pierdas la oportunidad, Es un perrito muy tranquilo pero eso si es muy leal, le gusta salir a jugar en parques y que le rasquen detras
                de las orejas.
            </p><br>
            <h3>¿Deseas Adoptarme?</h3><br>
            <a href="../../pets.php"><button class="boton">Volver</button></a>
            <span id="boton">
        </div>
</div>

        <div id="foot"></div>
    </body>
</html>