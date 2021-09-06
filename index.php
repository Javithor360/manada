<?php  session_start();
        require 'php/username-conexion.php';
        include('php/define_lang.php');
 ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title><?php echo $index['pageIndexTitle'] ?></title>
        <link rel="stylesheet" type="text/css" href="css/index_style.css">
        <link rel="shortcut icon" href="src/logos/favicon.ico" type="image/x-icon">
        <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
        <script src="./js/navfootMaker.js"></script>
</head>
<body>
<div class="fBody">
        <header id="logo">
                <?php echo $navbar['indexHeader'] ?>
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
                        <h1 id="adopta"><?php echo $index['sliderTitle'] ?></h1>
                        <h2><?php echo $index['sliderDesc'] ?></h2>
                        <a class="boton" id="hover_slide_button" href="pets.php"><?php echo $index['sliderButton'] ?></a>
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
                                        <h1><?php echo $index['misionTitle'] ?></h1>
                                        <p><?php echo $index['misionDesc'] ?></p>
                                </div>
                                <div id="vision_div">
                                        <h1><?php echo $index['visionTitle'] ?></h1>
                                        <p><?php echo $index['visionDesc'] ?></p>
                                </div>
                        </div>
                </div>
                <hr>
                <div id="container-div2">
                        <h1><?php echo $index['servicesTitle'] ?></h1>
                        <div class="servicios-logo-container">
                                <div class="logos_servicios">
                                        <div class="contenedor">
                                                <div id="circulo1">
                                                        <a href="select.php"><img src="src/icons/icon1-01.svg" width="180px" height="150px"></a>
                                                </div>
                                                <p><?php echo $index['servicesButton1'] ?></p>
                                        </div>
                                        <div class="contenedor2">
                                                <div id="circulo2">
                                                        <a href="guides.php"><img src="src/icons/icon2-01.svg" width="200px" height="200px"></a>
                                                </div>
                                                <p><?php echo $index['servicesButton2'] ?></p>
                                        </div>
                                        <div class="contenedor3">
                                                <div id="circulo3">
                                                        <a href="contact.php"><img src="src/icons/icon3-01.svg" width="180px" height="190px"></a>
                                                </div>
                                                <p><?php echo $index['servicesButton3'] ?></p>
                                        </div>
                                        <div id="frase">
                                                <h1><?php echo $index['lastTitle'] ?></h1>
                                        </div>
                                </div>
                                
                        </div>
                </div>
        </main>
        <div id="foot"></div>
</div>  
</body>
</html>