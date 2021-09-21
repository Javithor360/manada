<?php  session_start();
        require 'php/username-conexion.php';
        include('php/define_lang.php');
		
		$dbname=$_GET['type'];
		$conexion=mysqli_connect('localhost','root','','mascotas',);
        $id=$_GET['id'];
        if($dbname == 'perros'){
			$sql="SELECT * FROM perros WHERE id='$id'";
		}else{
			$sql="SELECT * FROM gatos WHERE id='$id'";
		}
        $result=mysqli_query($conexion, $sql);
        $data=mysqli_fetch_array($result);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/footer_style.css">
        <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/navbar2_style.css">
        <link rel="stylesheet" href="./css/adopcion.css">
        <script src="./js/navfootMaker.js"></script>
        <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>", logout: "<?php echo $navbar['logout'] ?>", profile: "<?php echo $navbar['profile'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
        <title><?php echo $adoptform ['adoptFormPageTitle'] ?></title>
    </head>
    <body>
        <div id="navy"></div>

            <main>
<div class="container">
        <div class="form">
			
            <!--- -->
            <form  id="#form"  method="POST">
                <label id="title1"> <?php echo $adoptform ['AdoptFormTittle'] ?> </label>
                <label id="title2"> <?php echo $adoptform ['AdoptionFormDesc'] ?> </label>
                <input type="text" name="name" placeholder=" <?php echo $adoptform ['AdotionFormName'] ?> " required="">
                <input placeholder=" <?php echo $adoptform ['AdoptionFormEmail'] ?> " type="email" name="email" autocomplete="off" required="">
                    <label class="labelform"for=""> <?php echo $adoptform ['AdoptFormReason'] ?> </label>
                    <textarea id="textbox" required="" name="info" placeholder=" <?php echo $adoptform ['AdoptFormJustify'] ?> "></textarea>
                <button id='enviar'type="submit" name='send'>
                    <?php echo $contact ['ContactSendButton'] ?>
                </button>
                <?php include('php/output_post.php'); ?>
            </form>
        </div>
    </div>

            </main>
        <div id="foot"></div>
    </body>
</html>