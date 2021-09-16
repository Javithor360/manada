<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/thanks.css">
        <title><?php echo $thanks ['ThanksPageTitle'] ?></title>
    </head>
    <body>
        <div class="container">
            <h1><?php echo $thanks ['ThanksHeaderTitle'] ?></h1>
            <img src="./src/thanks.png" height="500px" width="750px">
            <div id="right">
                <p><?php echo $thanks ['ThanksHeaderDesc'] ?></p>
                <a href="./index.html"><button><?php echo $thanks ['ThanksBack'] ?></button></a>
            </div>
        </div>
    </body>
</html>