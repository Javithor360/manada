<?php session_start();
        $login = isset($_SESSION['email']);   
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
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
        <title>Form ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>

        <div class="formu">
            <form action="php/formu_dar2.php" method="POST">
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
            <br><br>
            <label for="vacunas">Applied vaccines:</label>

                <label class="container">Distemper Vaccine
                    <input type="checkbox"value="Distemper Vaccine" name="opc1">
                    <span class="checkmark"></span>
                  </label>
                  
                  <label class="container">Herpesvirus Vaccine
                    <input type="checkbox"value="Herpesvirus Vaccine" name="opc2">
                    <span class="checkmark"></span>
                  </label>
                  
                  <label class="container">Parpovirus Vaccine
                    <input type="checkbox"value="Parpovirus Vaccine" name="opc3">
                    <span class="checkmark"></span>
                  </label>

                  <label class="container">Boedetollis Vaccine
                    <input type="checkbox"value="Boedetollis Vaccine" name="opc4">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Parainfluenza Vaccine
                    <input type="checkbox"value="Parainfluenza Vaccine" name="opc5">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Leptoporosis Vaccine
                    <input type="checkbox"value="Leptoporosis Vaccine" name="opc6">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Rabies Vaccine
                    <input type="checkbox"value="Rabies Vaccine" name="opc7">
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