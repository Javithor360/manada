<?php  session_start();
        require 'php/username-conexion.php';
        include('php/define_lang.php');
 ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/navbar2_style.css">
        <link rel="stylesheet" href="./css/catalogo.css">
        <link rel="stylesheet" href="./css/footer_style.css">
        <script src="./js/navfootMaker.js"></script>
        <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>", logout: "<?php echo $navbar['logout'] ?>", profile: "<?php echo $navbar['profile'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
        <title><?php echo $pets ['pagePetsTitle'] ?></title>
    </head>
    <body>
        <div class="fBody">
                <div id="navy"></div>
                <section class="panel">
                    <h2 id="articles"> <?php echo $pets ['PetsHeaderTitle'] ?> </h2>
                    <div class="container">
                        <main class="grid">
                            <!-- <aside>
                                <span><h3>Filtros de búsqueda<img src="./src/icons/filter.svg"></h3></span>
                                <span><a href="#"><h5>Género<img src="./src/icons/arrow_down.svg"></h5></a></span>
                                <span><a href="#"><h5>Especie<img src="./src/icons/arrow_down.svg"></h5></a></span>
                                <span><a href="#"><h5>Edad<img src="./src/icons/arrow_down.svg"></h5></a></span>
                                <span><a href="#"><h5>Color<img src="./src/icons/arrow_down.svg"></h5></a></span>
                            </aside> -->
                            <?php 
                                $conexion=mysqli_connect('localhost','root','','mascotas',);
                             ?>
                             <?php 
                                $sql="SELECT * FROM perros";
                                $result=mysqli_query($conexion, $sql);
                                while ($data=mysqli_fetch_array($result)) {
                                    // code...
                              ?>
                                <a href="<?php echo $data['paginaindividual']?>?id=<?php echo $data['id']?>"><article>
                                    <img src="<?php echo $data['imagen']?>">
                                    <div class="blogText">
                                        <h3><?php echo $data['nombre'] ?></h3><img src="<?php echo $data['generoicon'] ?>">
                                    </div>
                                </article></a>
                            <?php } ?>
                            <?php 
                                $sql="SELECT * FROM gatos";
                                $result=mysqli_query($conexion, $sql);
                                while ($data=mysqli_fetch_array($result)) {
                                    // code...
                              ?>
                                <a href="<?php echo $data['paginaindividual']?>?id=<?php echo $data['id'] ?>"><article>
                                    <img src="<?php echo $data['imagen']?>">
                                    <div class="blogText">
                                        <h3><?php echo $data['nombre'] ?></h3><img src="<?php echo $data['generoicon'] ?>">
                                    </div>
                                </article></a>
                            <?php } ?>
                        </main>
                    </div>
                </section>
                <div id="foot"></div>
        </div>
    </body>
</html>