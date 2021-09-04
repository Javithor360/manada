<?php  session_start();
        require '../php/username-conexion.php';
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cuidado de perros ∙ La Manada</title>
        <link rel="stylesheet" href="../css/dogcare.css">
        <link rel="stylesheet" href="../css/navbar2_style.css">
        <link rel="stylesheet" href="../css/footer_style.css">
        <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
        <script src="../js/navfootMaker.js"></script>
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
        <script type="text/javascript">window.username = "<?php echo $username ?>";</script>
    </head>
    <body>
        <div id="navy"></div>
    <div class="main">
        <div class="container">
            <h1>Guía de cuidado para los caninos del hogar</h1>
            <hr size=2px color='blue'>
    
            <section class="sect">
    
                <p>
                    Tener a un perro implica una gran responsabilidad. Aunque los consejos para cuidar a tu mascota son sencillos, se debe
                    saber que serán para el resto de su vida, por lo tanto, cuidar a tu perro, o a ese perro que pretendes adoptar, no es tarea fácil.
                    Además de facilitarle las cosas básicas como son la comida, el agua, el veterinario o hacer ejercicio, hay otros consejos 
                    que son importantes para que tu mascota esté feliz y con una salud de hierro.
                </p>
    
                <div class='img'>
                    <figure>
                     <img src="../src/dogAdvice.jpg">
                            <p>"Dame una caricia y te seguiré hasta el fin del mundo"</p>
                    </figure>
                </div>
    
            </section>
    
            <section class='sect'>
               
                <h2>Alimentación saludable</h2>
                <hr size=2px color='blue'>
                <img  id='food' src="../src/dogfood.jpg">
                    <p>
                       Según la edad del cachorro le daremos de comer con más o menos frecuencia: tres veces al día si es un cachorro, dos o incluso una si es un perro adulto
                    </p>

                    <p>
                        Siempre tendremos un poco de agua fresca en el cuenco para que el can esté hidratado, especialmente en los meses más calurosos del año.
                    </p>
    
                    <p>
                        Debes darle un pienso de calidad, nutritivo, y acorde a la edad del perro para que ingiera todos los nutrientes que necesita.
                    </p>
    
                    <p>
                        Los tres nutrientes esenciales para los perros son: <b>Hidratos de Carbono</b> o proporcionan energía, cuidan el intestino, las <b>proteinas</b> son 
                       fundamentales para las células, los tejidos y <b>Vitaminas</b> para que su metabolismo funcione correctamente.
                    </p>
            </section>
    
            <section class="sect">
                <h2>La hígiene</h2>
                
                <hr size=2px color='blue'>
                    <p>
                        Esta es otra necesidad básica que no debemos nunca descuidar. Cuando hablamos de higiene, tenemos que tener en cuenta:
                    </p>
    
                    <img id='care' src="../src/baño.jpg">   
                        <article>
                            <h3>Baño</h3>
                                <p>
                                    Para saber cuándo lavar a tu perro, observa si tiene el pelo sucio, con mal olor, si está muy acalorado o ha hecho ejercicio.Recuerda que bañarles demasiado puede perjudicarles.                        
                                </p>
    
                            <h3>Mantener sus dientes sanos</h3>
                                <p>
                                    La limpieza de la boca es fundamental para evitar bacterias, sarro, halitosis y otros problemas. Puedes limpiar tú mismo sus dientes a diario con un cepillo o tres veces a la semana con una pasta de dientes específica para perros.
                                </p>
                        </article>
            </section>
    
            <section class="sect">
                <h2>Los paseos</h2>
                <hr size=2px color='blue'>
                    <p>
                        Además de la alimentación, la actividad en tu mascota es fundamental para que esté en forma y se mantenga sana. Por eso, es necesario que haga ejercicio de manera habitual, pero con precaución para evitar lesiones o heridas.
                        Esto le ayudará a expresarse, explorar, seguir rastros, mantenerse activo y, sobre todo, ¡divertirse!
                    </p>
    
                    <p>
                        Dar paseos frecuentes, salir a correr o jugar con tu perro le ayudará a estar sano y os permitirá construir poco a poco un gran vínculo en vuestra relación.
                    </p>
    
    
                <img src="../src/actividad.jpg" id='play'>
            </section>
    
            <div class="backB">
                <a href="../guides.php"><button id='back'>Volver</button></a>
            </div>
    
        </div>
    </div>
    
        <div id="foot"></div>
    
    </body>
</html>