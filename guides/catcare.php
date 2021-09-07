<?php  session_start();
        require '../php/username-conexion.php';
        include('../php/define_lang.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $catcare['pageCatCareTitle'] ?></title> 
    <link rel="stylesheet" href="../css/catcare.css">
    <link rel="stylesheet" href="../css/navbar2_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
    <script src="../js/navfootMaker.js"></script>
    <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
</head>    
<body>
 
    <div id="navy"></div>

<div class="main"> 
    <div class="container">
        <h1> <?php echo $catcare ['CatCareHeaderTitle'] ?> </h1>
        <hr size=2px color=#11698E>

        <section class="sect">

            <p>
                <?php echo $catcare ['CatCareHeaderDesc'] ?>
            </p>

            <div class='img'>
                <figure>
                 <img src="../src/catAdvice.jpg">
                        <p> <?php echo $catcare ['CatCareHeaderImage'] ?> </p>
                </figure>
            </div>

        </section>

        <section class='sect'>
           
            <h2> <?php echo $catcare ['CatCareHealthyNutTite'] ?> </h2>
            <hr size=2px color=#11698E>
            <img  id='food' src="../src/foodCat.jpg">
                <p>  
                    <?php echo $catcare ['CatCareHealthyNutDescLine1'] ?>
                </p>
                
                <p>
                    <?php echo $catcare ['CatCareHealthyNutDescLine2'] ?>
                </p>

                <p>
                    <?php echo $catcare ['CatCareHealthyNutDescLine3'] ?>                
                </p>

                <p>
                    <?php echo $catcare ['CatCareHealthyNutDescLine4'] ?>
                </p>
        </section>

        <section class="sect">
            <h2> <?php echo $catcare ['CatCareHygieneTitle'] ?> </h2>
            
            <hr size=2px color=#11698E>
                <p>
                   <?php echo $catcare ['CatCareHygieneDesc'] ?>
                </p>
                <img id='care' src="../src/brushCat.jpg">   
                    <article>
                        <h3> <?php echo $catcare ['CatCareBrushTitle'] ?> </h3>
                            <p>
                                <?php echo $catcare ['CatCareBrushDesc'] ?>
                            </p>

                        <h3> <?php echo $catcare ['CatCareBathTitle'] ?> </h3>
                            <p>
                                <?php echo $catcare ['CatCareBathDesc'] ?>
                            </p>
                    </article>
        </section>

        <section class="sect">
            <h2> <?php echo $catcare ['CatCarePlayTitle'] ?> </h2>
            <hr size=2px color=#11698E>
                <p>
                    <?php echo $catcare ['CatCarePlayDescLine1'] ?>
                </p>

                <p>
                    <?php echo $catcare ['CatCarePlayDescLine2'] ?>
                </p>

                <p>
                    <?php echo $catcare ['CatCarePlayDescLine3'] ?>
                </p>

            <img src="../src/playCat.jpg" id='play'>
        </section>

            <div class="backB">
                <a href="../guides.php"><button id='back'> <?php echo $catcare ['GoBackButton'] ?> </button></a>
            </div>

    </div>
</div>

    <div id="foot"></div>

</body>
</html>
