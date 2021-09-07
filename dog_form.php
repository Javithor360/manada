<?php  session_start();
        require 'php/username-conexion.php';
        include('php/define_lang.php');
 ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/forms2.css">
        <link rel="stylesheet" href="./css/navbar2_style.css">
        <link rel="stylesheet" href="./css/footer_style.css">
        <script src="./js/navfootMaker.js"></script>
        <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
        <title><?php echo $dog_form ['DogFormHeaderTitle'] ?> ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>

        <div class="formu">
            <form action="php/formu_dar2.php" method="POST" onSubmit="document.getElementById('enviar').disabled=true;">
                <label for="firstName" class="first-name"><?php echo $dog_form ['DogFormHolder1'] ?>:</label>
                <input class="input" id="firstName" type="text" name="nombre" placeholder="<?php echo $dog_form ['DogFormHolder1Desc'] ?>" required>
    
            <label for="age"><?php echo $dog_form ['DogFormHolder2'] ?>:</label>
            <input class="input" for="age" type="number" name="edad" placeholder="<?php echo $dog_form ['DogFormHolder2Desc'] ?>" min="0" max="35" required>
    
            <label for="sex"><?php echo $dog_form ['DogFormHolder3'] ?>:</label>
            <select class="input" name="sexo">
                <option>&nbsp;</option>
                <option><?php echo $dog_form ['DogFormHolder3Desc1'] ?></option>
                <option><?php echo $dog_form ['DogFormHolder3Desc2'] ?></option>
            </select>
            <br><br>
            <label for="vacunas"><?php echo $dog_form ['DogFormHolder4'] ?>:</label>

                <label class="container"><?php echo $dog_form ['DogFormHolder4Desc1'] ?>
                    <input type="checkbox"value="Contra Distemper" name="opc1">
                    <span class="checkmark"></span>
                  </label>
                  
                  <label class="container"><?php echo $dog_form ['DogFormHolder4Desc2'] ?>
                    <input type="checkbox"value="Contra Herpesvirus" name="opc2">
                    <span class="checkmark"></span>
                  </label>
                  
                  <label class="container"><?php echo $dog_form ['DogFormHolder4Desc3'] ?>
                    <input type="checkbox"value="Contra Parpovirus" name="opc3">
                    <span class="checkmark"></span>
                  </label>

                  <label class="container"><?php echo $dog_form ['DogFormHolder4Desc4'] ?>
                    <input type="checkbox"value="Contra Boedetollis" name="opc4">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container"><?php echo $dog_form ['DogFormHolder4Desc5'] ?>
                    <input type="checkbox"value="Contra Parainfluenza" name="opc5">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container"><?php echo $dog_form ['DogFormHolder4Desc6'] ?>
                    <input type="checkbox"value="Contra Leptoporosis" name="opc6">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container"><?php echo $dog_form ['DogFormHolder4Desc7'] ?>
                    <input type="checkbox"value="Contra Rabia" name="opc7">
                    <span class="checkmark"></span>
                  </label>  
                  </label>
                  <br><br>
            <button id="enviar" type="submit"><?php echo $dog_form ['DogSendButton'] ?></button>
          </form>
        </div>

        <div id="foot"></div>
    </body>
</html>
<!--<label for="vacunas">Vacunas con las que cuenta su mascota:</label>
            <input name="cbipeliculas" type="checkbox"><p class="enfer">Contra Distemper</p>
            <br>
            <input name="cbilibros" type="checkbox"> <p class="enfer">Contra Hepatitis</p>
           <br>
           <input name="cbiinternet" type="checkbox"><p class="enfer">Contra Parpovirus</p>
           <br>
           <input name="cbiinternet" type="checkbox"><p class="enfer">Contra Boedetollis</p>
           <br>
           <input name="cbiinternet" type="checkbox"><p class="enfer">Contra Parainfluenza</p>
           <br>
           <input name="cbiinternet" type="checkbox"><p class="enfer">Contra Leptoporosis</p>
           <br>
           <input name="cbiinternet" type="checkbox"><p class="enfer">Contra Rabia</p>
           <br><br><br>-->