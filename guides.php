<?php  session_start();
        require 'php/username-conexion.php';
 ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Blog ∙ La Manada</title>
        <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/navbar2_style.css">
        <link rel="stylesheet" href="css/guides.css">
        <link rel="stylesheet" href="css/footer_style.css">
        <script src="js/navfootMaker.js"></script>
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
        <script type="text/javascript">window.username = "<?php echo $username ?>";</script>
    </head>
    <body>
        <div id="navy"></div>
<div class="fBody">
        <section class="main-container">
            <div class="postnav">
                <div class="text">
                    <h2>¿Te interesan las mascotas?</h2>
                    <p>
                        Bien dicen que las mascotas son compañeras perfectas para nosotros.
                        Cuidar de nuestros compañeros es un obligación y un privilegio para todos,
                        hay una infinidad de cosas que no sabemos de ellos, curiosidades y tips 
                        de cuido para nuestros compañeros de cuatro patas; por eso, en este apartado podrás encontrar mucha información relacionada a los procesos
                        de nuestra página e información acerca de nuestros fieles compañeros.
                    </p>
                    <a href="#articles">Ver artículos</a>
                </div>
                <div class="rightImg">
                    <img class="glassDog" src="./src/blogPet.png" alt="¡Lee nuestros artículos">
                </div>
            </div>
        </section>
        <span id="articles"></span>
        <div class="container">
            <h2>Nuestros artículos</h2>
            <main class="grid">
                <article>
                    <img src="./src/blog_dogcare.jpg">
                    <div class="blogText">
                        <h3>¿Cómo cuidar a mi perro?</h3>
                        <p>Tener a un perro implica una gran responsabilidad. Aunque los consejos para cuidar a tu mascota son sencillos, se debe saber que serán para el resto de su vida, por lo tanto, cuidar a tu perro [...]</p>
                        <a href="./guides/dogcare.php"><button>Leer más</button></a>
                    </div>
                </article>
            
                <article>
                    <img src="./src/blog_catcare.jpg">
                    <div class="blogText">
                        <h3>¿Cómo cuidar a mi gato?</h3>
                        <p>¿Es tu primera vez teniendo un peludo amigo? En esta guía conoceras información básica a tomar en cuenta para el cuidado de tu nuevo amigo, desde una alimentación saludable hasta la ayuda que le puedes brindar a la hora de su aseo [...]</p>
                        <a href="./guides/catcare.php"><button>Leer más</button></a>
                    </div>
                </article>

                <article>
                    <img src="./src/blog_adopt.jpg">
                    <div class="blogText">
                        <h3>¿Cómo puedo adoptar?</h3>
                        <p>Como Fundación La Manada nos preocupamos para que tengas la mejor experiencia con nuestro sitio, es por ello que te brindamos esta práctica guía en la que explicamos de forma sencilla los pasos que a seguir para adoptar a tu nuevo amigo [...]</p>
                        <a href="./guides/how_to_adopt.php"><button>Leer más</button></a>
                    </div>
                </article>

                <article>
                    <img src="./src/blog_bringadopt.jpg">
                    <div class="blogText">
                        <h3>¿Cómo puedo poner en adopción?</h3>
                        <p>Puede ser que por ciertos motivos ya no puedas tener a tu mascota contigo y decidas darla en adopción, cuidaremos a tu amigo hasta que tenga un nuevo hogar, te brindamos una serie de pasos que debes seguir para realizar este proceso [...]</p>
                        <a href="./guides/put-adoption.php"><button>Leer más</button></a>
                    </div>
                </article>
            </main>
        </div>
</div>
        <div id="foot"></div>
    </body>
</html>