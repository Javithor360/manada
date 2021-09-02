<?php session_start();
        $login = isset($_SESSION['email']);   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cat care ∙ La Manada</title> 
    <link rel="stylesheet" href="../css/catcare.css">
    <link rel="stylesheet" href="../css/navbar2_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
    <script src="../js/navfootMaker.js"></script>
    <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
</head>    
<body>
    
    <div id="navy"></div>

    <div class="container">
        <h1>Care guide for home felines</h1>
        <hr size=2px color=#11698E>

        <section class="sect">

            <p>
                Is this your first time having a furry friend? In this guide you will learn basic information to take into account for the care of your new friend, from a healthy diet to the help you can provide when it comes to grooming. A new world is created when you receive your first kitten, it is a complicated task but these little friends help you to reduce stress, improve mental health and improve overall health.
            </p>

            <div class='img'>
                <figure>
                 <img src="../src/catAdvice.jpg">
                        <p>"I only need three things from you: lots of attention, a balanced diet and a little help with my grooming"</p>
                </figure>
            </div>

        </section>

        <section class='sect'>
           
            <h2>Healthy nutrition</h2>
            <hr size=2px color=#11698E>
            <img  id='food' src="../src/foodCat.jpg">
                <p>  
                    Being carnivorous animals, their diet must include meat, as it is a main source of energy and protein for these beautiful animals.
                </p>
                
                <p>
                    Make sure their diet is rich in protein and other nutrients, as kittens stomachs are sensitive.
                </p>

                <p>
                    They are not human! Therefore, adding human foods or supplements to a balanced diet can cause very serious problems in their stomach.
                </p>

                <p>
                The three essential nutrients for cats are: <b>Taurine</b> for sharp eyesight and a healthy heart, <b>arachidonic acid</b> for healthy skin and a silky coat and <b>vitamin A</b> again for their eyesight and coat.
                </p>
        </section>

        <section class="sect">
            <h2>Hygiene is important</h2>
            
            <hr size=2px color=#11698E>
                <p>
                    Although they are independent and picky about their own grooming, they could use a little help. This could also create an excellent bond with your kitten.
                </p>
                <img id='care' src="../src/brushCat.jpg">   
                    <article>
                        <h3>Brushing</h3>
                            <p>
                                Could you take 5 to 15 minutes to remove tangled hair. Most cats like to be brushed, but if yours doesn't, don't force it.
                            </p>

                        <h3>A bath</h3>
                            <p>
                                In short-haired cats, a bath is not entirely necessary, but if they are too dirty, a bath would not be a bad idea. But for long-haired cats, an occasional bath can help keep the coat soft and prevent the accumulation of grease.
                            </p>
                    </article>
        </section>

        <section class="sect">
            <h2>Play with them!</h2>
            <hr size=2px color=#11698E>
                <p>
                    Playing with them is just as important as feeding or grooming them, as they develop their intelligence, encourage their skills and at the same time practice sports.  Cats, being very curious and independent animals, can entertain themselves with many things.
                </p>

                <p>
                    A bored cat is a destructive cat, you need to have different options to entertain a cat at home.
                </p>

                <p>
                    Depending on the type of game, toy or activity and the interaction the activity requires, your cat will be willing to invest time in it. If he gets bored easiy, it is because he did not find it attractive.
                </p>

            <img src="../src/playCat.jpg" id='play'>
        </section>

            <div class="backB">
                <a href="../guides.php"><button id='back'>Go back</button></a>
            </div>

    </div>

    <div id="foot"></div>

</body>
</html>
