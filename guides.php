<?php  session_start();
        require 'php/username-conexion.php';
        include('php/define_lang.php');
 ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $blog['pageBlogTitle'] ?></title>
        <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/navbar2_style.css">
        <link rel="stylesheet" href="css/guides.css">
        <link rel="stylesheet" href="css/footer_style.css">
        <script src="js/navfootMaker.js"></script>
        <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>", logout: "<?php echo $navbar['logout'] ?>", profile: "<?php echo $navbar['profile'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
    <body>
        <div id="navy"></div>
<div class="fBody">
        <section class="main-container">
            <div class="postnav">
                <div class="text">
                    <h2><?php echo $blog['headerBlogTitle'] ?></h2>
                    <p><?php echo $blog['headerBlogDesc'] ?></p>
                    <a href="#articles"><?php echo $blog['headerBlogButton']; ?></a>
                </div>
                <div class="rightImg">
                    <img class="glassDog" src="./src/blogPet.png" alt="¡Lee nuestros artículos">
                </div>
            </div>
        </section>
        <span id="articles"></span>
        <div class="container">
            <h2><?php echo $blog ['ArtsTitle'] ?></h2>
            <main class="grid">
                <article>
                    <img src="./src/blog_dogcare.jpg">
                    <div class="blogText">
                        <h3><?php echo $blog ['ArtsDogTitle'] ?></h3>
                        <p> <?php echo $blog ['ArtsDogDesc'] ?> </p>
                        <a href="./guides/dogcare.php"><button> <?php echo $blog ['ReadMoreButton'] ?> </button></a>
                    </div>
                </article>
            
                <article>
                    <img src="./src/blog_catcare.jpg">
                    <div class="blogText">
                        <h3> <?php echo $blog ['ArtsCatTitle'] ?> </h3>
                        <p> <?php echo $blog ['ArtsCatDesc'] ?> </p>
                        <a href="./guides/catcare.php"><button><?php echo $blog ['ReadMoreButton'] ?></button></a>
                    </div>
                </article>

                <article>
                    <img src="./src/blog_adopt.jpg">
                    <div class="blogText">
                        <h3> <?php echo $blog ['ArtsHowAdoptTitle'] ?> </h3>
                        <p> <?php echo $blog ['ArtsHowAdoptDesc'] ?> </p>
                        <a href="./guides/how_to_adopt.php"><button><?php echo $blog ['ReadMoreButton'] ?></button></a>
                    </div>
                </article>

                <article>
                    <img src="./src/blog_bringadopt.jpg">
                    <div class="blogText">
                        <h3> <?php echo $blog ['ArtsGivePetTitle'] ?> </h3>
                        <p> <?php echo $blog ['ArtsGivePetDesc'] ?> </p>
                        <a href="./guides/put-adoption.php"><button><?php echo $blog ['ReadMoreButton'] ?></button></a>
                    </div>
                </article>
            </main>
        </div>
</div>
        <div id="foot"></div>
    </body>
</html>