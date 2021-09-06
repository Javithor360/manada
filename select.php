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
        <title>Héroes como tú... ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
        

        <section>
            <img class="img" src="./src/select_upsidePuppy.png">
            <div class="intro">
                <h1>¡Gracias por unirte a la causa!</h1>
                <p>
                    Gracias por permitir que tu mascota pueda tener un lugar donde pueda dormir y vivir 
                    en paz, muchas mascotas no corren con la misma suerte y son abandonados cruelmente, 
                    donde el destino les da una triste realidad de maltrato y sufrimiento. En nuestro 
                    país El Salvador el 70% de la poblacion canina se encuentra abandonada en la calle,
                    y en cuanto a gatos el 65% de la poblacion felina se encuentran en abandono.
               </p>
            </div>

            <div class="art1">
                <img class="leftImg" src="./src/select_supercat.png">
                <h1>Héroes como tú...</h1>
                <p>
                    Gracias a ti podremos rescatar una mascota más y permitirle un hogar donde
                    pueda ser feliz y brindarle todo el amor que merece y nesesita; tú eres una 
                    persona con un gran corazón, para nosotros eres un gran héroe ya que quieres
                    un mejor futuro para tu mascota, lejos del maltrato animal, tu mascota estará 
                    a salvo con nosotros.
                </p>
            </div>

            <div class="select">
                <h1>¿Quieres dar en adopción?</h1>
                <p>Escoje el tipo de mascota que nos confiarás</p>
                <span>
                    <a href="./cat_form.php"><img class="zoom" src="./src/cat.svg" alt="¡Quiero poner en adopción a mi gato!"></a>
                    <a href="./dog_form.php"><img class="zoom" src="./src/perroo.svg" alt="¡Quiero poner en adopción a mi gato!"></a>
                </span>
            </div>
        </section>
        <div id="foot"></div>
    </body>
</html>