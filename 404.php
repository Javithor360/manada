<?php
    http_response_code(404);
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <script>
            function pathMaker() {
                var pathway = '',
                    finalPath,
                    container,
                    img;

                if(location.pathname.includes('/pets/')){ pathway = '../../'; }
                else if(location.pathname.includes('/guides/')){ pathway = '../';}
                else if(location.pathname.includes('/php/')){ pathway = '../';}  
                else{ pathway = './'};

                img = [`${pathway}/src/error404.png`, `${pathway}/src/error404_2.png`];

                finalPath = document.getElementsByTagName('head')[0];
                finalPath.innerHTML +=  `<link rel="shortcut icon" href="${pathway}src/logos/favicon.ico" type="image/x-icon">\n`+
                                        `<link rel="stylesheet" href="${pathway}css/error404.css">`;

                container = document.getElementById('todo');
                container.innerHTML +=  `<div class="container">`+
                                            `<h1>¡Algo salió mal!</h1>`+
                                            `<img src="${img[Math.floor(Math.random() * img.length)]}" height="500px" width="750px">`+
                                            `<div id="right">`+
                                                `<p>La página solicitada no ha sido encontrada...</p>`+
                                                `<a href="${pathway}index.php"><button>Regresar</button></a>`+
                                            `</div>`+
                                        `</div>`;
            }
            window.onload = pathMaker;
        </script>

        <meta charset="UTF-8">
        <title>Página no encontrada ∙ La Manada</title>
    </head>
    <body>
            <div id="todo"></div>
    </body>
</html>