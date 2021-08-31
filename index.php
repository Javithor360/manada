<?php session_start();
        $login = isset($_SESSION['email']);   
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>TEST Fundación: La manada</title>
        <link rel="stylesheet" type="text/css" href="css/index_style.css">
        <link rel="shortcut icon" href="src/logos/favicon.ico" type="image/x-icon">
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
        <script src="js/navfootMaker.js"></script>
</head>
<body>

<div class="fBody">
        <div id="navyIndex"></div>

        <div class="slider_img_container">
                <ul>
                        <li><img src="src/perro1_slider.jpg"></li>
                        <li><img src="src/gato1_slider.jpg"></li>
                        <li><img src="src/perro2_slider.jpg"></li>
                        <li><img src="src/perro3_slider.jpg"></li>
                        <li><img src="src/gato2_slider.jpg"></li>
                        <li><img src="src/perro4_slider.jpg"></li>
                </ul>
                <div id="slider_text_container">
                        <h1 id="adopta">
                                ¡Adopta!
                        </h1>
                        <h2>
                                Salvas muchos animales y consigues un nuevo mejor amigo
                        </h2>
                        <a class="boton" id="hover_slide_button" href="pets.php">Quiero Adoptar</a>
                        <p>
                                <a href="#down"><img id="flecha" src="src/icons/flechaabajo.svg"></a>
                        </p>
                </div>
        </div>
        <br>
        <hr id="down" style="border: 0 none;">
        <main id="contenedor-principal">
                <div id="container-div1">
                        <div id="mision_vision_container" style="display: flex;">
                                <div id="mision_div">
                                        <h1>Misión</h1>
                                        <p>
                                                Somos una fundación salvadoreña especializada en el cuido de animales
                                                domésticos y nos encargarmos de brindar la mejorar atención a aquellos
                                                amigos de cuatro patas que han sido puestos en adopción, asegurando su 
                                                cuido mientras encuentran un nuevo hogar. 
                                        </p>
                                </div>
                                <div id="vision_div">
                                        <h1>Visión</h1>
                                        <p>
                                                Ser una fundación bastante reconocida por nuestra labor para expandirnos
                                                a otros países del contiente centroaméricano y así ejercer nuestra labor 
                                                de cuido en el extranjero ampliando nuestro rumbo al rescate de animales
                                                en las calles para brindarles el buen cuido que merecen. 
                                        </p>
                                </div>
                        </div>
                </div>
                <hr>
                <div id="container-div2">
                        <h1>Nuestros Servicios</h1>
                        <div class="servicios-logo-container">
                                <div class="logos_servicios">
                                        <div class="contenedor">
                                                <div id="circulo1">
                                                        <a href="select.php"><img src="src/icons/icon1-01.svg" width="180px" height="150px"></a>
                                                </div>
                                                <p>Dar en adopción</p>
                                        </div>
                                        <div class="contenedor2">
                                                <div id="circulo2">
                                                        <a href="guides.php"><img src="src/icons/icon2-01.svg" width="200px" height="200px"></a>
                                                </div>
                                                <p>Guias de cuidado</p>
                                        </div>
                                        <div class="contenedor3">
                                                <div id="circulo3">
                                                        <a href="contact.php"><img src="src/icons/icon3-01.svg" width="180px" height="190px"></a>
                                                </div>
                                                <p>Contacto</p>
                                        </div>
                                        <div id="frase">
                                                <h1>¡Cuidemos los Animales!</h1>
                                        </div>
                                </div>
                                
                        </div>
                </div>
        </main>

        <div id="foot"></div>
</div>  
</body>
</html>