<?php  session_start();
        require 'php/username-conexion.php';
        include('php/define_lang.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi cuenta</title>
    <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>", logout: "<?php echo $navbar['logout'] ?>", profile: "<?php echo $navbar['profile'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
    <script src="./js/navfootMaker.js"></script>
    <link rel="shortcut icon" href="src/logos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/navbar2_style.css">
    <link rel="stylesheet" href="css/footer_style.css">
    <link rel="stylesheet" href="css/myaccount.css">
</head>
<body>
    <div id="navy"></div>
    <main>
        <div class="container">
            <div id="user">
                <span>
                    <?php 
                        if ($gender=="M") {
                    ?>        
                        <div class="user_img">
                            <img src="src/icons/male_user_icon.svg" width="100px">
                        </div>
                    <?php   
                        }else if ($gender=="F") {
                    ?>
                            <div class="user_img">
                                <img src="src/icons/female_user_icon.svg" width="100px">
                            </div>
                    <?php        
                        }
                    ?>
                </span>
                <span id="name">
                    <?php 
                        echo ($username);
                    ?>
                    <hr size=2px color=' #11698e' width="750px">
                </span>

            </div>
            
            <div class="user_data_container">
                <div id="user_data">
                    <div class="user_info">
                        <div id="text_info">
                            <small><img src="src/icons/email-user-icon.svg" alt=""></small>
                            <p>Correo Electronico</p>
                        </div>
                        
                        <span id="text">
                            <?php 
                                echo ($mail);
                            ?>
                        </span>
                    </div>
                    <div class="user_info">
                        <div id="text_info">
                            <small><img src="src/icons/phone.svg" alt=""></small>
                            <p>Numero telefonico</p>
                        </div>
                        
                        <span id="text">
                            <?php 
                                echo ($tel);
                            ?>
                        </span>
                    </div>
                    <div class="user_info">
                        <div id="text_info">
                            <small><img src="src/icons/calendar.svg" alt=""></small>
                            <p>Fecha de nacimiento</p>
                        </div>
                        
                        <span id="text">
                            <?php 
                                echo ($bD);
                            ?>
                        </span>
                    </div>
                    
                </div>
                
            </div>
            <div id="button-container">
                    <a  id="button"href="php/logout.php">Cerrar Sesión</a>
            </div>
        </div>
           

    </main>
    <div id="foot"></div>
</body>
</html>