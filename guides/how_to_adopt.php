<?php session_start();
        $login = isset($_SESSION['email']);   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/how_to_adopt_style.css">
    <link rel="stylesheet" href="../css/navbar2_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <script src="../js/navfootMaker.js"></script>
    <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
    <title>¿Cómo Adoptar? ∙ La Manada</title>
</head>
<body>
    <div id="navy"></div>

    <main>
        <div class="container">
            <div class="text_container">
                <h1>¿Cómo Adoptar?</h1>
                <p>En Fundación La Manada brindamos el servicio de adopción de animales de una forma fácil y sencilla, si deseas encontrar un nuevo integrante peludo a tu familia sigue los pasos que te mostramos a continuación y verás que pronto tendrás a tu amigo peludo disfrutando contigo en casa.</p>
                <div class="steps">
                    <figure id="step1"> 
                        <!--<div style="color: black;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, suscipit dolore est incidunt maiores beatae quis error sint quia. Et, placeat dolor omnis? Delectus, id, minus. Earum, doloremque harum nihil.
                        </div>-->
                        <img id="hidden" src="../src/icons/iniciar-sesion.svg" alt="" width="100px" height="100px">
                        <figcaption>Paso 1: Inicia sesión</figcaption>
                    </figure>
                    <figure> 
                        <img src="../src/icons/pets-01.svg" alt="" width="100px" height="100px">
                        <figcaption>Paso 2: Selecciona la especie</figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/huella2.svg" alt="" width="100px" height="100px">
                        <figcaption>Paso 3: Busca a tu nuevo mejor amigo</figcaption>
                    </figure>
                </div>
                <div class="steps2">
                   <figure>
                        <img src="../src/icons/form_icon.svg" alt="" width="100px" height="100px">
                        <figcaption>Paso 4: Llena el formulario con los datos solicitados</figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/mail_icon1.svg" alt="" width="100px" height="100px">
                    <figcaption>Paso 5: Espera la confirmacion para adoptar en tu correo electronico</figcaption>
                    </figure>
                    <figure>
                        <img src="../src/icons/done.svg" alt="" width="100px" height="100px">
                    <figcaption>Paso 6: ¡Listo! puedes pasar por tu nueva mascota cuando quieras</figcaption>
                    </figure>
                </div>
                <a id="back" href="../guides.php">Volver</a>
            </div>
            <div class="img_container">
                <img src="../src/adopt_img.jpg" alt="">
            </div>
        </div>
    </main>
    <div id="foot"></div>
</body>
</html>