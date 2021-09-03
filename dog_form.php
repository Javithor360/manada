<?php session_start();
         
        if(isset($_SESSION['email'])){
                //conexion a la base
                $conexion = new mysqli("localhost","root","","login");
                $emaillogged = $_SESSION['email'];
                $db_consulta = "SELECT email, name, lastNames FROM usuarioslogin WHERE email = '$emaillogged'";
                $result = $conexion->query($db_consulta);
                $printuser = $result->fetch_assoc();
                $username = $printuser['name'] . " " . $printuser['lastNames'];
        }
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
        <script type="text/javascript">window.username = "<?php echo $username ?>";</script>
        <title>Formulario ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>

        <div class="formu">
            <form action="php/formu_dar2.php" method="POST">
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
            <br><br>
            <label for="vacunas">Vacunas con las que cuenta su mascota:</label>

                <label class="container">Contra Distemper
                    <input type="checkbox"value="Contra Distemper" name="opc1">
                    <span class="checkmark"></span>
                  </label>
                  
                  <label class="container">Contra Herpesvirus
                    <input type="checkbox"value="Contra Herpesvirus" name="opc2">
                    <span class="checkmark"></span>
                  </label>
                  
                  <label class="container">Contra Parpovirus
                    <input type="checkbox"value="Contra Parpovirus" name="opc3">
                    <span class="checkmark"></span>
                  </label>

                  <label class="container">Contra Boedetollis
                    <input type="checkbox"value="Contra Boedetollis" name="opc4">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Contra Parainfluenza
                    <input type="checkbox"value="Contra Parainfluenza" name="opc5">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Contra Leptoporosis
                    <input type="checkbox"value="Contra Leptoporosis" name="opc6">
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">Contra Rabia
                    <input type="checkbox"value="Contra Rabia" name="opc7">
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