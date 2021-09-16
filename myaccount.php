<?php  session_start();
        require 'php/username-conexion.php';
        include('php/define_lang.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $myaccount ['MyaccountPageTitle'] ?></title>
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
        <div class="user_container">
            <div class="user">
                    <!-- <p>Hola!</p> -->
                    <?php 
                        if ($gender=="Masculino") {
                    ?>        
                        <div class="user_img">
                            <img src="src/icons/male_user_icon.svg" width="100px">
                        </div>
                    <?php   
                        }else if ($gender=="Femenino") {
                    ?>
                            <div class="user_img">
                                <img src="src/icons/female_user_icon.svg" width="100px">
                            </div>
                    <?php        
                        }
                    ?>
                    <p>
                        <?php 
                            // echo "Hola ",($username);
                            echo ($username);
                        ?>
                    </p>    
                    <hr size=2px color=' #11698e'>
            </div>
        </div>    
        <div class="container">
            <h2><?php echo $myaccount ['MyaccountData'] ?></h2>
             <div class="user_data_container">
                    
                    
                    <div class="user_info">
                        <div id="text_info">
                            <small><img src="src/icons/email-user-icon.svg" alt=""></small>
                            <p><?php echo $myaccount ['MyaccountMail'] ?></p>
                        </div>
                        
                        <div id="mail">
                            <?php 
                                echo ($mail);
                            ?> 
                        </div>
                    </div>
                    
                    <div class="user_info">
                        <div id="text_info">
                            <small><img src="src/icons/phone.svg" alt=""></small>
                            <p><?php echo $myaccount ['MyaccountTel'] ?></p>
                        </div>
                        
                        <span id="text">
                            <?php 
                                echo ($tel);
                            ?>
                        </span>
                    </div>
            </div>
            <div class="user_data_container">        
                    <div class="user_info">
                        <div id="text_info">
                            <small><img src="src/icons/calendar.svg" alt=""></small>
                            <p><?php echo $myaccount ['MyaccountBorn'] ?></p>
                        </div>
                        
                        <span id="text">
                            <?php 
                                echo ($bD);
                            ?>
                        </span>
                    </div>
                    <div class="user_info">
                        <div id="text_info">
                            <?php 
                                if ($gender=="Masculino") {
                            ?>        
                                <small><img src="src/icons/gender_m.svg" alt=""></small>
                            <?php   
                                }else if ($gender=="Femenino") {
                            ?>
                                <small><img src="src/icons/gender_f.svg" alt=""></small>
                            <?php        
                                }
                            ?>
                            <p><?php echo $myaccount ['MyaccountGender'] ?></p>
                        </div>
                        <span id="text">
                            <?php 
                                if ($gender=="Masculino") {
                            ?>        
                                <?php echo $myaccount ['MyaccountMale'] ?>
                            <?php   
                                }else if ($gender=="Femenino") {
                            ?>
                                <?php echo $myaccount ['MyaccountFemale'] ?>
                            <?php        
                                }
                            ?>
                        </span>
                    </div>
                </div>
                <div id="button-container">
                    <a  id="button"href="php/logout.php"><?php echo $myaccount ['MyaccountLogout'] ?></a>
            </div>
        </div>
           
        </div>
           
           
 
            
              

            

    </main>
    <div id="foot"></div>
</body>
</html>