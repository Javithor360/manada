<?php session_start();
        $login = isset($_SESSION['email']);   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuidado de gatos ∙ La Manada</title> 
    <link rel="stylesheet" href="../css/catcare.css">
    <link rel="stylesheet" href="../css/navbar2_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
    <script src="../js/navfootMaker.js"></script>
    <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
</head>    
<body>
    
    <div id="navy"></div>

    <div class="container">
        <h1>Guía de cuidado para los felinos del hogar</h1>
        <hr size=2px color=#11698E>

        <section class="sect">

            <p>
                ¿Es tu primera vez teniendo un peludo amigo? En esta guía conoceras información básica a tomar en cuenta para el cuidado de 
                tu nuevo amigo, desde una alimentación saludable hasta la ayuda que le puedes brindar a la hora de su aseo. Un nuevo mundo se crea a la hora 
                de recibir a tu primer gatito, es una tarea complicada pero estos amiguitos te ayudan a reducir el estrés, mejora la salud mental y mejora la salud en general.
            </p>

            <div class='img'>
                <figure>
                 <img src="../src/catAdvice.jpg">
                        <p>"Solo necesito tres cosas de ti: Mucha atención, una dieta balanceada y que me des una patita con mi aseo."</p>
                </figure>
            </div>

        </section>

        <section class='sect'>
           
            <h2>Alimentación saludable</h2>
            <hr size=2px color=#11698E>
            <img  id='food' src="../src/foodCat.jpg">
                <p>  
                    Al ser animales carnívoros su dieta tiene que incluir carne ya que son una fuente principal de energía y proteínas 
                    para estos bellos animalitos.
                </p>
                
                <p>
                    Procura que su dieta sea rica en proteínas y otros nutrientes ya que los estómagos de los gatitos son sensibles.
                </p>

                <p>
                    ¡No son humanos! por lo que añadir comida humana o sumplementos a una dieta equilibrada puede causarle problemas muy graves en su estómago.
                </p>

                <p>
                    Los tres nutrientes esenciales para los gatos son: <b>Taurina</b> para una vista águda y un corazón sano, el <b>ácido araquidónico</b> para una 
                    piel saludable y un pelaje sedoso y la <b>vitamina A</b> nuevamente para su viste y el pelaje.
                </p>
        </section>

        <section class="sect">
            <h2>La hígiene es importante</h2>
            
            <hr size=2px color=#11698E>
                <p>
                    Apesar de ser independientes y exigentes con su propio aseo no les vendria mal una pequeña ayuda. Además esto podría crear un excelente vínculo con tu gatito.
                </p>
                <img id='care' src="../src/brushCat.jpg">   
                    <article>
                        <h3>Cepillado</h3>
                            <p>
                                Podrías tomar un tiempo de 5 - 15 minutos para eliminar su pelo pelo enredado. A la mayoría de los gatos les gusta que los cepillen, 
                                pero si al tuyo no, no lo fuerces.
                            </p>

                        <h3>Un baño</h3>
                            <p>
                                En los gatos de pelo corto no es del todo necesario un baño pero si estan demasiados sucios no les vendria mal un baño. Pero a los gatos de pelo largo,
                                un baño ocasional puede ayudar a mantener el pelaje suave y evita la acumulación de grasa.
                            </p>
                    </article>
        </section>

        <section class="sect">
            <h2>¡Juega con ellos!</h2>
            <hr size=2px color=#11698E>
                <p>
                    Igual de importante que una alimentación o su aseo es el jugar con ellos, al estar entretenidos desarrollan su inteligencia, fomentan sus destrezas y a la vez practican deporte. 
                    Los gatos al ser animales muy curiosos e independientes se pueden llegar a entretener con muchas cosas.
                </p>

                <p>
                    Un gato aburrido es un gato destructor, es necesario que tengas diferentes opciones para entretener a un gato en casa.
                </p>

                <p>
                    Dependiendo del tipo de juego, juguete o actividad y la interacción que necesite la actividad será el tiempo que tu gato este dispuestos a invertir en ella. Si se aburre fácil es que  no le pareció atractivo.
                </p>

            <img src="../src/playCat.jpg" id='play'>
        </section>

            <div class="backB">
                <a href="../guides.php"><button id='back'>Volver</button></a>
            </div>

    </div>

    <div id="foot"></div>

</body>
</html>
