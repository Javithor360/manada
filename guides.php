<?php session_start();
        $login = isset($_SESSION['email']);   
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
    </head>
    <body>
        <div id="navy"></div>
        <section class="main-container">
            <div class="postnav">
                <div class="text">
                    <h2>Are you interested in pets?</h2>
                    <p>
                        Well said that pets are perfect companions for us. Taking care of our companions is an obligation and a privilege for everyone, there are an infinity of things we don't know about them, curiosities and care tips for our four-legged companions. Therefore, in this section you will find a lot of information related to the processes of our website and information about our pets. and information about our faithful companions.
                    </p>
                    <a href="#articles">See articles</a>
                </div>
                <div class="rightImg">
                    <img class="glassDog" src="./src/blogPet.png" alt="¡Lee nuestros artículos">
                </div>
            </div>
        </section>
        <span id="articles"></span>
        <div class="container">
            <h2>Our articles</h2>
            <main class="grid">
                <article>
                    <img src="./src/blog_dogcare.jpg">
                    <div class="blogText">
                        <h3>How to take care of my dog?</h3>
                        <p>Having a dog implies a great responsibility. Although the tips to take care of   your pet are simple, you should know that they will be for the rest of his life, therefore, taking care of your dog [...]</p>
                        <a href="./guides/dogcare.php"><button>Read more</button></a>
                    </div>
                </article>
            
                <article>
                    <img src="./src/blog_catcare.jpg">
                    <div class="blogText">
                        <h3>How to take care of my cat?</h3>
                        <p>Is this your first time having a furry friend? In this guide you will learn basic information to take keep in mind for the care of your new friend, from a healthy diet to the help you can provide when it comes to grooming [...]</p>
                        <a href="./guides/catcare.php"><button>Read more</button></a>
                    </div>
                </article>

                <article>
                    <img src="./src/blog_adopt.jpg">
                    <div class="blogText">
                        <h3>How can I adopt?</h3>
                        <p>As La Manada Foundation we care about you to have the best experience with our site, that is why we offer you this practical guide in which we explain in a simple way the steps to follow to adopt your new friend [...]</p>
                        <a href="./guides/how_to_adopt.php"><button>Read more</button></a>
                    </div>
                </article>

                <article>
                    <img src="./src/blog_bringadopt.jpg">
                    <div class="blogText">
                        <h3>How can I give up for adoption?</h3>
                        <p>It may be that for certain reasons you can no longer have your pet with you and you decide to give it up for adoption, we will take care of your friend until it has a new home, we provide a series of steps you must follow to complete this process [...]</p>
                        <a href="./guides/put-adoption.php"><button>Read more</button></a>
                    </div>
                </article>
            </main>
        </div>
        <div id="foot"></div>
    </body>
</html>