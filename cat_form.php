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
        <title>Form ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>

        <br><br><br>
        <div class="formu">
            <form action="php/formu_dar.php" method="POST">
                <label for="firstName" class="first-name">Pet's name:</label>
                <input class="input" id="firstName" type="text" name="nombre" placeholder="Type the name" required>

                <label for="age">Age:</label>
                <input class="input" for="age" type="number" name="edad" placeholder="Type the age" min="0" max="35" required>

                <label for="sex">Genrer:</label>
                <select class="input" name="sexo">
                    <option>&nbsp;</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <label for="vacunas">Applied vaccines:</label>
                <br><br>

                <label class="container">Distemper Vaccine
                    <input type="checkbox" value="Distemper Vaccine" name="op1">
                    <span class="checkmark"></span>
                  </label>
                  
                  <label class="container">Herpesvirus Vaccine
                    <input type="checkbox" value="Herpesvirus Vaccine" name="op2">
                    <span class="checkmark"></span>
                  </label>
                  
                  <label class="container">Calicivirus Vaccine
                    <input type="checkbox" value="Calicivirus Vaccine" name="op3">
                    <span class="checkmark"></span>
                  </label>

                  <label class="container">Leukemia Vaccine
                    <input type="checkbox" value="Leukemia Vaccine" name="op4">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Infectious Peritonitis Vaccine
                    <input type="checkbox" value="Infectious Peritonitis Vaccine" name="op5">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Felis Vaccine
                    <input type="checkbox" value="Felis Vaccine" name="op6">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Rabies Vaccine
                    <input type="checkbox" value="Rabies Vaccine" name="op7">
                    <span class="checkmark"></span>
                  </label>  
                  </label>
                  <br><br>
                <button>Send</button>
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