<?php
    http_response_code(404);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/error404.css">
        <title>Página no encontrada ∙ La Manada</title>
    </head>
    <body>
        <div class="container">
            <h1>¡Algo salió mal!</h1>
            <img src="./src/error404.png" height="500px" width="750px">
            <div id="right">
                <p>La página solicitada no ha sido encontrada...</p>
                <a href="./index.php"><button>Regresar</button></a>
            </div>
        </div>
    </body>
</html>