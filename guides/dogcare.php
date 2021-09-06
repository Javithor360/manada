<?php  session_start();
        require '../php/username-conexion.php';
        include('../php/define_lang.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dog Care</title>
        <link rel="stylesheet" href="../css/dogcare.css">
        <link rel="stylesheet" href="../css/navbar2_style.css">
        <link rel="stylesheet" href="../css/footer_style.css">
        <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
        <script src="../js/navfootMaker.js"></script>
        <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
    <body>
        <div id="navy"></div>
    <div class="main">
        <div class="container">
            <h1> <?php echo $dogcare ['DogCareHeaderTitle'] ?> </h1>
            <hr size=2px color='blue'>
    
            <section class="sect">
    
                <p>
                    <?php echo $dogcare ['DogCareHeaderDesc'] ?>
                </p>
    
                <div class='img'>
                    <figure>
                     <img src="../src/dogAdvice.jpg">
                            <p> <?php echo $dogcare ['DogCareHeaderImage'] ?> </p>
                    </figure>
                </div>
    
            </section>
    
            <section class='sect'>
               
                <h2> <?php echo $dogcare ['DogCareHealthyNutTitle'] ?> </h2>
                <hr size=2px color='blue'>
                <img  id='food' src="../src/dogfood.jpg">
                    <p>
                        <?php echo $dogcare ['DogCareHealthyNutDescLine1'] ?>
                    </p> 

                    <p>
                        <?php echo $dogcare ['DogCareHealthyNutDescLine2'] ?>
                    </p>
    
                    <p>
                        <?php echo $dogcare ['DogCareHealthyNutDescLine3'] ?>
                    </p>
    
                    <p>
                        <?php echo $dogcare ['DogCareHealthyNutDescLine4'] ?>
                    </p>
            </section>
    
            <section class="sect">
                <h2> <?php echo $dogcare ['DogcareHygieneTitle'] ?> </h2>
                
                <hr size=2px color='blue'>
                    <p>
                        <?php echo $dogcare ['DogCareHygieneDesc'] ?>
                    </p>
    
                    <img id='care' src="../src/baño.jpg">   
                        <article>
                            <h3> <?php echo $dogcare ['DogCareBathTitle'] ?> </h3>
                                <p>
                                    <?php echo $dogcare ['DogCareBathDesc'] ?>                        
                                </p>
    
                            <h3> <?php echo $dogcare ['DogCareTeethTitle'] ?> </h3>
                                <p>
                                   <?php echo $dogcare ['DogCareTeethDesc'] ?>
                                </p>
                        </article>
            </section>
    
            <section class="sect">
                <h2> <?php echo $dogcare ['DogCaresWalksTitle'] ?> </h2>
                <hr size=2px color='blue'>
                    <p>
                        <?php echo $dogcare ['DogCareWalksDescP1'] ?>
                    <p>
                        <?php echo $dogcare ['DogCareWalksDescP2'] ?>
                    </p>
    
    
                <img src="../src/actividad.jpg" id='play'>
            </section>
    
            <div class="backB">
                <a href="../guides.php"><button id='back'> <?php echo $dogcare ['GoBackButton'] ?> </button></a>
            </div>
    
        </div>
    </div>
    
        <div id="foot"></div>
    
    </body>
</html>