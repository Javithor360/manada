<?php session_start();
        $login = isset($_SESSION['email']);   
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>La manada Foundation</title>
        <link rel="stylesheet" type="text/css" href="css/index_style.css">
        <link rel="shortcut icon" href="src/logos/favicon.ico" type="image/x-icon">
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
        <script src="js/navfootMaker.js"></script>
</head>
<body>

<div class="fBody">
                <header id="logo">
                        <img src="src/logos/logo_full.svg" width="366px" height="120px">
                </header>
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
                                ¡Adopt!
                        </h1>
                        <h2>
                                You save a lot of animals and get a new best friend
                        </h2>
                        <a class="boton" id="hover_slide_button" href="pets.php">I want to adopt</a>
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
                                        <h1>Mission</h1>
                                        <p>
                                                We are a Salvadorian foundation specialized in the care of pets and we are in charge of providing the best care to those four-legged friends who have been put up for adoption, ensuring their care while they find a new home. 
                                        </p>
                                </div>
                                <div id="vision_div">
                                        <h1>Vision</h1>
                                        <p>
                                                To be a foundation quite recognized for our work, to expand to other countries in the Central American continent and thus exercise our work of care abroad expanding our course to the rescue of animals on the streets to provide them with the good care they deserve.
 
                                        </p>
                                </div>
                        </div>
                </div>
                <hr>
                <div id="container-div2">
                        <h1>Our services</h1>
                        <div class="servicios-logo-container">
                                <div class="logos_servicios">
                                        <div class="contenedor">
                                                <div id="circulo1">
                                                        <a href="select.php"><img src="src/icons/icon1-01.svg" width="180px" height="150px"></a>
                                                </div>
                                                <p>Give up to adoption</p>
                                        </div>
                                        <div class="contenedor2">
                                                <div id="circulo2">
                                                        <a href="guides.php"><img src="src/icons/icon2-01.svg" width="200px" height="200px"></a>
                                                </div>
                                                <p>Care guides</p>
                                        </div>
                                        <div class="contenedor3">
                                                <div id="circulo3">
                                                        <a href="contact.php"><img src="src/icons/icon3-01.svg" width="180px" height="190px"></a>
                                                </div>
                                                <p>Contact us</p>
                                        </div>
                                        <div id="frase">
                                                <h1>¡Let's save the animals!</h1>
                                        </div>
                                </div>
                                
                        </div>
                </div>
        </main>

        <div id="foot"></div>
</div>  
</body>
</html>