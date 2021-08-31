<?php session_start();
        $login = isset($_SESSION['email']);   
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
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
        <title>Formulario ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>

        <br><br><br>
        <div class="formu">
            <form action="php/formu_dar.php" method="POST">
                <label for="firstName" class="first-name">Nombres la mascota:</label>
                <input class="input" id="firstName" type="text" name="nombre" placeholder="Ingrese sus nombres" required>

                <label for="age">Edad:</label>
                <input class="input" for="age" type="number" name="edad" placeholder="Ingrese su edad" min="0" max="35" required>

                <label for="sex">Sexo:</label>
                <select class="input" name="sexo">
                    <option>&nbsp;</option>
                    <option>Macho</option>
                    <option>Hembra</option>
                </select>
                <label for="vacunas">Vacunas con las que cuenta su mascota:</label>
                <br><br>

                <label class="container">Contra Distemper
                    <input type="checkbox" value="Contra Distemper" name="op1">
                    <span class="checkmark"></span>
                  </label>
                  
                  <label class="container">Contra Herpesvirus
                    <input type="checkbox" value="Contra Herpesvirus" name="op2">
                    <span class="checkmark"></span>
                  </label>
                  
                  <label class="container">Contra Calicivirus
                    <input type="checkbox" value="Contra Calicivirus" name="op3">
                    <span class="checkmark"></span>
                  </label>

                  <label class="container">Contra Leucemia
                    <input type="checkbox" value=">Contra Leucemia" name="op4">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Contra Peritonitis infecciosa
                    <input type="checkbox" value="Peritonitis infecciosa" name="op5">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Contra Felis
                    <input type="checkbox" value="Contra Felis" name="op6">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Contra Rabia
                    <input type="checkbox" value="Contra Rabia" name="op7">
                    <span class="checkmark"></span>
                  </label>  
                  </label>
                  <br><br>
                <button>Enviar</button>
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