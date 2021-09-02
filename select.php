<?php session_start();
        $login = isset($_SESSION['email']);   
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
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
        <title>Heroes like you... ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
        

        <section>
            <img class="img" src="./src/select_upsidePuppy.png">
            <div class="intro">
                <h1>Thank you for joining the cause!</h1>
                <p>
                    Thank you for allowing your pet to have a place to sleep and live in peace, many pets do not have the same fate and are cruelly abandoned, where fate gives them a sad reality of abuse and suffering. In our country El Salvador 70% of the canine population is abandoned in the street, and as for cats, 65% of the feline population is abandoned.
               </p>
            </div>

            <div class="art1">
                <img class="leftImg" src="./src/select_supercat.png">
                <h1>Heores like you...</h1>
                <p>
                    Thanks to you we will be able to rescue one more pet and allow it a home where it can be happy and give it all the love it deserves and needs; you are a person with a big heart, for us you are a great hero because you want a better future for your pet, far from animal abuse, your pet will be safe with us.
                </p>
            </div>

            <div class="select">
                <h1>Do you want to give up for adoption?</h1>
                <p>Choose the type of pet you will entrust us with</p>
                <span>
                    <a href="./cat_form.php"><img class="zoom" src="./src/cat.svg" alt="¡Quiero poner en adopción a mi gato!"></a>
                    <a href="./dog_form.php"><img class="zoom" src="./src/perroo.svg" alt="¡Quiero poner en adopción a mi gato!"></a>
                </span>
            </div>
        </section>
        <div id="foot"></div>
    </body>
</html>