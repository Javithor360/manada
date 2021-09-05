<?php  session_start();
        require 'php/username-conexion.php';
 ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>La Manada | Mascotas</title>
        <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/navbar2_style.css">
        <link rel="stylesheet" href="./css/catalogo.css">
        <link rel="stylesheet" href="./css/footer_style.css">
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
        <script src="js/navfootMaker.js"></script>
        <script type="text/javascript">window.username = "<?php echo $username ?>";</script>
    </head>
    <body>
        <div id="navy"></div>

        <div class="container">
            <h2 id="articles">Conoce a nuestras mascotas</h2>
            <main class="grid">
                <article>
                    <img src="./src/pets/cat/_Emma.jpg">
                    <div class="blogText">
                        <h3>Emma</h3>
                        <p>Soy una gatita que a su corta edad  sabe que tu eres parte importante en mi vida si me brindas un hogar yo te brindare horas de compañia y felicidad</p>
                        <a href="./pets/cat/Emma.html"><button>Conoceme más</button></a>
                    </div>
                </article>
            
                <article>
                    <img src="./src/pets/cat/_Valentin.jpg">
                    <div class="blogText">
                        <h3>Valentin</h3>
                        <p>Soy un gatito el cual su nombre no es en bano ya que soy muy valiente y te protegere de todo lo que te aterra acompañandote a donde quiera que vayas</p>
                        <a href="./pets/cat/Valentin.html"><button>Conoceme más</button></a>
                    </div>
                </article>

                <article>
                    <img src="./src/pets/cat/_Linda.jpg">
                    <div class="blogText">
                        <h3>Linda</h3>
                        <p>Soy una gata un poco comelona pero eso si rellenita de amor, el cual estoy dispuesta a darte a combio de el tuyo, permiteme serparte de tu familia.</p>
                        <a href="./pets/cat/Linda.html"><button>Conoceme más</button></a>
                    </div>
                </article>

                <article>
                    <img src="./src/pets/cat/_Camila.png">
                    <div class="blogText">
                        <h3>Camila</h3>
                        <p>Soy una gata muy tranquila pero no siempre, suelo estar acostada al lado de mi dueño y espero pronto poder domir a tu lado acompañad de ti, dame la oprtunidad de un hogar.</p>
                        <a href="./pets/cat/Camila.html"><button>Conoceme más</button></a>
                    </div>
                </article>
            
                <article>
                    <img src="./src/pets/cat/_Steicy.jpg">
                    <div class="blogText">
                        <h3>Steicy</h3>
                        <p>Soy una gata un poco iperactiva pero si  me recibes en tu hogar prometo portarme bien y cuidar de ti, asi como tu me permitieras  un hogar donde poder vivir</p>
                        <a href="./pets/cat/Steicy.html"><button>Conoceme más</button></a>
                    </div>
                </article>

                <article>
                    <img src="./src/pets/cat/_Luca.jpg">
                    <div class="blogText">
                        <h3>Luca</h3>
                        <p>Soy un gato muy chiquito y bonito, permiteme poder pasar a tu hogar y te prometo que estaras en mi corazon y seras como un padré para mi</p>
                        <a href="./pets/cat/Luca.html"><button>Conoceme más</button></a>
                    </div>
                </article>

                <article>
                    <img src="./src/pets/cat/_Darwin.jpg">
                    <div class="blogText">
                        <h3>Darwin</h3>
                        <p>Soy un gato muy alegre al cual le gusta jugar mucho con su dueño, me gustaria que tu fueses mi dueño y me cuidases por el resto de mi vida y te prometo cuidarte.</p>
                        <a href="./pets/cat/Darwin.html"><button>Conoceme más</button></a>
                    </div>
                </article>
            
                <article>
                    <img src="./src/pets/cat/_Wallase.jpg">
                    <div class="blogText">
                        <h3>Wallase</h3>
                        <p>Soy un gato muy dormilon, te prometo que no causare destrozos y te acompañare cada que quieras tomar una siesta estare a tu lado para cuidar de ti y no te sientas solo.</p>
                        <a href="./pets/cat/Wallase.html"><button>Conoceme más</button></a>
                    </div>
                </article>

                <article>
                    <img src="./src/pets/cat/_Richard.jpg">
                    <div class="blogText">
                        <h3>Richard</h3>
                        <p>Soy un gato muy educado y elegante el cual no causara desastre y obedecera todo lo que me digas porque mi cariño por ti sera incondicional.</p>
                        <a href="./pets/cat/Richard.html"><button>Conoceme más</button></a>
                    </div>
                </article>
            </main>
        </div>
        <div id="foot"></div>
    </body>
</html>