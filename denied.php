<?php  session_start();
        include('php/define_lang.php');
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

                img = [`${pathway}/src/denied1.png`, `${pathway}/src/denied2.png`, `${pathway}/src/denied3.png`];

                finalPath = document.getElementsByTagName('head')[0];
                finalPath.innerHTML +=  `<link rel="shortcut icon" href="${pathway}src/logos/favicon.ico" type="image/x-icon">\n`+
                                        `<link rel="stylesheet" href="${pathway}css/error404.css">`;

                container = document.getElementById('todo');
                container.innerHTML +=  `<div class="container">`+
                                            `<h1> <?php echo $denied ['DeniedHeaderTitle'] ?> </h1>`+
                                            `<img src="${img[Math.floor(Math.random() * img.length)]}" height="500px" width="750px">`+
                                            `<div id="right">`+
                                                `<p> <?php echo $denied ['DeniedDesc'] ?> </p>`+
                                                `<a href="${pathway}php/login.php"><button> <?php echo $denied ['DeniedLogIn'] ?> </button></a>`+
                                            `</div>`+
                                        `</div>`;
            }
            window.onload = pathMaker;
        </script>

        <meta charset="UTF-8">
        <title><?php echo $denied ['deniedPageTitle'] ?></title>
    </head>
    <body>
            <div id="todo"></div>
    </body>
</html>