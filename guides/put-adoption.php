<?php  session_start();
        require '../php/username-conexion.php';
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/adoption_style.css">
    <link rel="stylesheet" href="../css/navbar2_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <script src="../js/navfootMaker.js"></script>
    <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
    <script type="text/javascript">window.username = "<?php echo $username ?>";</script>
    <title>¿Cómo puedo dar en adopción? ∙ La Manada</title>
</head>
<body>
    <div id="navy"></div>
    
    <main>
        <div class="container">
            <div class="text_container">
                <h1>¿Cómo puedo dar en adopción?</h1>
                <p>Como Fundación La Manada agradecemos la confianza que depositas en nosotros al darnos a tu mascota en adopción, es por ello que te brindamos esta serie de pasos a seguir para que puedas hacer el proceso sin complicaciones.</p>
                <div class="steps">
                    <figure id="step1"> 
                        <!--<div style="color: black;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, suscipit dolore est incidunt maiores beatae quis error sint quia. Et, placeat dolor omnis? Delectus, id, minus. Earum, doloremque harum nihil.
                        </div>-->
                        <img id="hidden" src="../src/icons/iniciar-sesion.svg" alt="" width="100px" height="100px">
                        <figcaption>Paso 1: Inicia sesión</figcaption>
                    </figure>
                    <figure> 
                        <img src="../src/icons/pets_species-01.svg" alt="" width="100px" height="100px">
                        <figcaption>Paso 2: Selecciona la especie que quieres dar en adopción</figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/form_icon2.svg" alt="" width="100px" height="100px">
                        <figcaption>Paso 3: Llena el formulario con los datos solicitados</figcaption>
                    </figure>
                </div>
                <div class="steps2">
                   <figure>
                        <img src="../src/icons/photo_step.svg" alt="" width="100px" height="100px">
                        <figcaption>Paso 4: Sube almenos 3 fotografias de la mascota</figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/check-data.svg" alt="" width="100px" height="100px">
                    <figcaption>Paso 5: Evaluaremos los datos que nos brindaste (Puede tomar tiempo)</figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/find_home.svg" alt="" width="100px" height="100px">
                    <figcaption>Paso 6: ¡Listo! si se cumplen los requisitos te contactaremos para que nos entregues a la mascota y buscarle un nuevo hogar</figcaption>
                    </figure>
                </div>
                <a id="back" href="../guides.php">Volver</a>
            </div>

            <div class="img_container">
                <img src="../src/adoption.jpg" alt="">
            </div>
        </div>
    </main>
    <div id="foot"></div>
</body>
</html>