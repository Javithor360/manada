<!DOCTYPE html>
<html lang="en">
    <head>

        <script>
            function randomizer() {
                var div = document.getElementsByClassName('container')[0],
                    img;
            
                img = [`./src/thanks1.png`, `./src/thanks2.png`, `./src/thanks3.png`, `./src/thanks4.png`, `./src/thanks5.png`];
                div.innerHTML +=    `<h1>¡Gracias!</h1>`+
                                    `<img src="${img[Math.floor(Math.random() * img.length)]}" height="550px" width="680px">`+
                                    `<div id="right">`+
                                        `<p>Tu solicitud de adopcion está siendo procesada, recibirás una respuesta lo más pronto posible</p>`+
                                        `<a href="./index.php"><button>Regresar</button></a>`+
                                    `</div>`;
            }
            window.onload = randomizer;
        </script>

        <meta charset="UTF-8">
        <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/thanks.css">
        <title>Gracias ∙ La Manada</title>
    </head>
    <body>
        <div class="container"></div>
    </body>
</html>