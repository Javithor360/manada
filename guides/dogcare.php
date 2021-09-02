<?php session_start();
        $login = isset($_SESSION['email']);   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dog care ∙ La Manada</title>
        <link rel="stylesheet" href="../css/dogcare.css">
        <link rel="stylesheet" href="../css/navbar2_style.css">
        <link rel="stylesheet" href="../css/footer_style.css">
        <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
        <script src="../js/navfootMaker.js"></script>
        <script type="text/javascript">window.session = "<?php echo $login ?>";</script>
    </head>
    <body>
        <div id="navy"></div>
    
        <div class="container">
            <h1>Care guide for home canines</h1>
            <hr size=2px color='blue'>
    
            <section class="sect">
    
                <p>
                Having a dog implies a great responsibility. Although the tips for taking care of your pet are simple, you should know that they will be simple for the rest of your pet's life.
                That is why taking care of your dog, or the one you intend to adopt, is not an easy task. In addition to providing basic things like food, water, veterinary care and exercise, there are other tips that are important for your pet to be happy and in good health.
                </p>
    
                <div class='img'>
                    <figure>
                     <img src="../src/dogAdvice.jpg">
                            <p>"Give me a caress and I'll follow you to the end of the world"</p>
                    </figure>
                </div>
    
            </section>
    
            <section class='sect'>
               
                <h2>Healthy nutrition</h2>
                <hr size=2px color='blue'>
                <img  id='food' src="../src/dogfood.jpg">
                    <p>
                        Depending on the age of the puppy, we will feed it more or less frequently: three times a day if it is a puppy, twice or even once if it is an adult dog.
                    </p>

                    <p>
                        We will always have some fresh water in the bowl to keep the dog hydrated, especially in the hottest months of the year.
                    </p>
    
                    <p>
                        You must give a quality and nutritious feed according to the age of the dog so that it ingests all the nutrients it needs.
                    </p>
    
                    <p>
                    The three essential nutrients for dogs are: <b>Carbohydrates</b>, they provide energy and take care of the intestine <b>proteins </b> which are essential for cells and tissues, <b>Vitamins</b> for their metabolism to function properly.
                    </p>
            </section>
    
            <section class="sect">
                <h2>Hygiene</h2>
                
                <hr size=2px color='blue'>
                    <p>
                        This is another basic need that we must never neglect. When we talk about hygiene, we have to keep in mind:
                    </p>
    
                    <img id='care' src="../src/baño.jpg">   
                        <article>
                            <h3>Bath</h3>
                                <p>
                                    To know when to bathe your dog, observe if its coat is dirty, smells bad, if it is very hot or if it has been exercising. Remember that bathing them too much can be harmful to them.                        
                                </p>
    
                            <h3>Keeping their teeth healthy</h3>
                                <p>
                                    Cleaning the mouth is essential to avoid bacteria, tartar, halitosis and other problems. You can clean their teeth yourself daily with a toothbrush or three times a week with a specific toothpaste for dogs.
                                </p>
                        </article>
            </section>
    
            <section class="sect">
                <h2>The walks</h2>
                <hr size=2px color='blue'>
                    <p>
                        In addition to food, your pet's activity is essential for him to be fit and healthy. Therefore, it is necessary to exercise regularly, but with caution to avoid injurys. This will help him express himself, explore, follow trails, stay active and, above all, have fun!
                    </p>
    
                    <p>
                        Taking frequent walks, going for a run or playing with your dog will help him stay healthy and allow us to gradually build a great bond in our relationship with the dog.
                    </p>
    
    
                <img src="../src/actividad.jpg" id='play'>
            </section>
    
            <div class="backB">
                <a href="../guides.php"><button id='back'>Go back</button></a>
            </div>
    
        </div>
    
        <div id="foot"></div>
    
    </body>
</html>