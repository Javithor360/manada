<?php session_start();
         
        if(isset($_SESSION['email'])){
                //conexion a la base
                $conexion = new mysqli("localhost","root","","login");
                $emaillogged = $_SESSION['email'];
                $db_consulta = "SELECT email, name, lastNames FROM usuarioslogin WHERE email = '$emaillogged'";
                $result = $conexion->query($db_consulta);
                $printuser = $result->fetch_assoc();
                $username = $printuser['name'] . " " . $printuser['lastNames'];
        }
        $login = isset($_SESSION['email']);
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
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
        <script type="text/javascript">window.username = "<?php echo $username ?>";</script>
        <title>Mascotas ∙ La Manada</title>
    </head>
    <body>
<div class="fBody">
        <div id="navy"></div>

        <section class="panel">
            <h2 id="articles">¡Conoce a tu nuevo amigo!</h2>
            <div class="container">
                <main class="grid">

                    <!-- <aside>
                        <span><h3>Filtros de búsqueda<img src="./src/icons/filter.svg"></h3></span>
                        <span><a href="#"><h5>Género<img src="./src/icons/arrow_down.svg"></h5></a></span>
                        <span><a href="#"><h5>Especie<img src="./src/icons/arrow_down.svg"></h5></a></span>
                        <span><a href="#"><h5>Edad<img src="./src/icons/arrow_down.svg"></h5></a></span>
                        <span><a href="#"><h5>Color<img src="./src/icons/arrow_down.svg"></h5></a></span>
                    </aside> -->
                    
                    <a href="./pets/dog/Kiara.php"><article>
                        <img src="./src/pets/dog/_Kiara.jpg">
                        <div class="blogText">
                            <h3>Kiara</h3><img src="./src/icons/female_pet.svg">
                        </div>
                    </article></a>
                
                    <a href="./pets/dog/Bruno.php"><article>
                        <img src="./src/pets/dog/_Bruno.jpg">
                        <div class="blogText">
                            <h3>Bruno</h3><img src="./src/icons/male_pet.svg">
                        </div>
                    </article></a>
    
                    <a href="./pets/dog/Liliana.php"><article>
                        <img src="./src/pets/dog/_Liliana.png">
                        <div class="blogText">
                            <h3>Liliana</h3><img src="./src/icons/female_pet.svg">
                        </div>
                    </article></a>
    
                    <a href="./pets/dog/Carlita.php"><article>
                        <img src="./src/pets/dog/_Carlita.png">
                        <div class="blogText">
                            <h3>Carlita</h3><img src="./src/icons/female_pet.svg">
                        </div>
                    </article></a>
                
                    <a href="./pets/dog/Princesa.php"><article>
                        <img src="./src/pets/dog/_Princesa.jpg">
                        <div class="blogText">
                            <h3>Princesa</h3><img src="./src/icons/male_pet.svg">
                        </div>
                    </article></a>
    
                    <a href="./pets/dog/Darla.php"><article>
                        <img src="./src/pets/dog/_Darla.png">
                        <div class="blogText">
                            <h3>Darla</h3><img src="./src/icons/female_pet.svg">
                        </div>
                    </article></a>
    
                    <a href="./pets/dog/Taco.php"><article>
                        <img src="./src/pets/dog/_Taco.png">
                        <div class="blogText">
                            <h3>Taco</h3><img src="./src/icons/male_pet.svg">
                        </div>
                    </article></a>
                
                    <a href="./pets/dog/Roco.php"><article>
                        <img src="./src/pets/dog/_Roco.png">
                        <div class="blogText">
                            <h3>Roco</h3><img src="./src/icons/male_pet.svg">
                        </div>
                    </article></a>
    
                    <a href="./pets/dog/Maggie.php"><article>
                        <img src="./src/pets/dog/_Maggie.png">
                        <div class="blogText">
                            <h3>Maggie</h3><img src="./src/icons/female_pet.svg">
                        </div>
                    </article></a>
    
                    <a href="./pets/cat/Emma.php"><article>
                        <img src="./src/pets/cat/_Emma.jpg">
                        <div class="blogText">
                            <h3>Emma</h3><img src="./src/icons/female_pet.svg">
                        </div>
                    </article></a>
                
                    <a href="./pets/cat/Valentin.php"><article>
                        <img src="./src/pets/cat/_Valentin.jpg">
                        <div class="blogText">
                            <h3>Valentin</h3><img src="./src/icons/male_pet.svg">
                        </div>
                    </article></a>
    
                    <a href="./pets/cat/Linda.php"><article>
                        <img src="./src/pets/cat/_Linda.jpg">
                        <div class="blogText">
                            <h3>Linda</h3><img src="./src/icons/female_pet.svg">
                        </div>
                    </article></a>
    
                    <a href="./pets/cat/Camila.php"><article>
                        <img src="./src/pets/cat/_Camila.png">
                        <div class="blogText">
                            <h3>Camila</h3><img src="./src/icons/female_pet.svg">
                        </div>
                    </article></a>
                
                    <a href="./pets/cat/Steicy.php"><article>
                        <img src="./src/pets/cat/_Steicy.jpg">
                        <div class="blogText">
                            <h3>Steicy</h3><img src="./src/icons/female_pet.svg">
                        </div>
                    </article></a>
    
                    <a href="./pets/cat/Luca.php"><article>
                        <img src="./src/pets/cat/_Luca.jpg">
                        <div class="blogText">
                            <h3>Luca</h3><img src="./src/icons/male_pet.svg">
                        </div>
                    </article></a>
    
                    <a href="./pets/cat/Darwin.php"><article>
                        <img src="./src/pets/cat/_Darwin.jpg">
                        <div class="blogText">
                            <h3>Darwin</h3><img src="./src/icons/male_pet.svg">
                        </div>
                    </article></a>
                
                    <a href="./pets/cat/Wallase.php"><article>
                        <img src="./src/pets/cat/_Wallase.jpg">
                        <div class="blogText">
                            <h3>Wallase</h3><img src="./src/icons/male_pet.svg">
                        </div>
                    </article></a>
    
                    <a href="./pets/cat/Richard.php"><article>
                        <img src="./src/pets/cat/_Richard.jpg">
                        <div class="blogText">
                            <h3>Richard</h3><img src="./src/icons/male_pet.svg">
                        </div>
                    </article></a>
                </main>
            </div>
        </section>

        <div id="foot"></div>
</div>
    </body>
</html>