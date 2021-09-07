<?php  session_start();
        require 'php/username-conexion.php';
        include('php/define_lang.php');
 ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/forms.css">
        <link rel="stylesheet" href="./css/navbar2_style.css">
        <link rel="stylesheet" href="./css/footer_style.css">
        <meta charset="UTF-8"> 
        <script src="./js/navfootMaker.js"></script>
        <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
        <title><?php echo $cat_form ['CatFormHeaderTitle'] ?> ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>

        <br><br><br>
        <div class="formu">
            <form action="php/formu_dar.php" method="POST" onSubmit="document.getElementById('enviar').disabled=true;">
                <label for="firstName" class="first-name"><?php echo $cat_form ['CatFormHeaderTitle'] ?>:</label>
                <input class="input" id="firstName" type="text" name="nombre" placeholder="<?php echo $dog_form ['CatFormHolder1Desc'] ?>" required>

                <label for="age"><?php echo $cat_form ['CatFormHolder2'] ?>:</label>
                <input class="input" for="age" type="number" name="edad" placeholder="<?php echo $dog_form ['CatFormHolder2Desc'] ?>" min="0" max="35" required>

                <label for="sex"><?php echo $cat_form ['CatFormHolder3'] ?>:</label>
                <select class="input" name="sexo">
                    <option>&nbsp;</option>
                    <option><?php echo $cat_form ['CatFormHolder3Desc1'] ?></option>
                    <option><?php echo $cat_form ['CatFormHolder3Desc2'] ?></option>
                </select>
                <label for="vacunas"><?php echo $cat_form ['CatFormHolder4'] ?>:</label>
                <br><br>

                <label class="container"><?php echo $cat_form ['CatFormHolder4Desc1'] ?>
                    <input type="checkbox" value="Contra Distemper" name="op1">
                    <span class="checkmark"></span>
                  </label>
                  
                  <label class="container"><?php echo $cat_form ['CatFormHolder4Desc2'] ?>
                    <input type="checkbox" value="Contra Herpesvirus" name="op2">
                    <span class="checkmark"></span>
                  </label>
                  
                  <label class="container"><?php echo $cat_form ['CatFormHolder4Desc3'] ?>
                    <input type="checkbox" value="Contra Calicivirus" name="op3">
                    <span class="checkmark"></span>
                  </label>

                  <label class="container"><?php echo $cat_form ['CatFormHolder4Desc4'] ?>
                    <input type="checkbox" value=">Contra Leucemia" name="op4">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container"><?php echo $cat_form ['CatFormHolder4Desc5'] ?>
                    <input type="checkbox" value="Peritonitis infecciosa" name="op5">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container"><?php echo $cat_form ['CatFormHolder4Desc6'] ?>
                    <input type="checkbox" value="Contra Felis" name="op6">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container"><?php echo $cat_form ['CatFormHolder4Desc7'] ?>
                    <input type="checkbox" value="Contra Rabia" name="op7">
                    <span class="checkmark"></span>
                  </label>  
                  </label>
                  <br><br>
                <button id="enviar" type="submit"><?php echo $cat_form ['CatSendButton'] ?></button>
            </form>
        </div>
        <div id="foot"></div>
    </body>
</html>

<!--<input name="cbipeliculas" type="checkbox"><p class="enfer">Contra Distemper</p>
                <br>
                <input name="cbilibros" type="checkbox"><p class="enfer"> Contra Herpesvirus</p>
                <br>
                <input name="cbiinternet" type="checkbox"><p class="enfer">Contra Calicivirus</p>
                <br>
                <input name="cbiinternet" type="checkbox"><p class="enfer">Contra Leucemia</p>
                <br>
                <input name="cbiinternet" type="checkbox"><p class="enfer">Contra Peritonitis infecciosa</p>
                <br>
                <input name="cbiinternet" type="checkbox"><p class="enfer">Contra Felis</p>
                <br>
                <input name="cbiinternet" type="checkbox"><p class="enfer">Contra Rabia</p>
                <br><br>