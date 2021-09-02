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
                    container;

                if(location.pathname.includes('/pets/')){ pathway = '../../'; }
                else if(location.pathname.includes('/guides/')){ pathway = '../';}
                else if(location.pathname.includes('/php/')){ pathway = '../';}  
                else{ pathway = './'};

                finalPath = document.getElementsByTagName('head')[0];
                finalPath.innerHTML +=  `<link rel="shortcut icon" href="${pathway}src/logos/favicon.ico" type="image/x-icon">\n`+
                                        `<link rel="stylesheet" href="${pathway}css/error404.css">`;

                container = document.getElementById('todo');
                container.innerHTML +=  `<div class="container">`+
                                            `<h1>Oops!</h1>`+
                                            `<img src="${pathway}src/error404.png" height="500px" width="750px">`+
                                            `<div id="right">`+
                                                `<p>Requested page not found...</p>`+
                                                `<a href="${pathway}index.php"><button>Go back</button></a>`+
                                            `</div>`+
                                        `</div>`;
            }
            window.onload = pathMaker;
        </script>

        <meta charset="UTF-8">
        <title>Page Not Found ∙ La Manada</title>
    </head>
    <body>
            <div id="todo"></div>
    </body>
</html>