<?php  
        $conexion=mysqli_connect('localhost','root','','mascotas',);
        $id=$_GET['id'];
        $sql="SELECT * FROM gatos WHERE id='$id'";
        $result=mysqli_query($conexion, $sql);
        $data=mysqli_fetch_array($result);
		
		if(mysqli_num_rows($result) == 0){
		   include('../../404.php');
		   die();
		}
		
		session_start();
        require '../../php/username-conexion.php';
        include('../../php/define_lang.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="../../src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../../css/navbar2_style.css">
        <link rel="stylesheet" href="../../css/footer_style.css">
        <link rel="stylesheet" href="../../css/mascotas.css">
        <script src="../../js/navfootMaker.js"></script>
        <script type="text/javascript">window.navfoot = { button: { success: "<?php echo $cat['CatButton2']?>", id: "<?php echo $_GET['id'] ?>", fail: "<?php echo $cat['CatButtonLogin']?>" }, lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>", logout: "<?php echo $navbar['logout'] ?>", profile: "<?php echo $navbar['profile'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
        <title><?php echo $cat ['CatHeaderTitle'] ?> <?php echo $data['nombre'] ?> ∙ La Manada</title>
    </head>
    <body>
        <div id="navy"></div>
<div class="fBody">
        <div class="cont">
            <h1 class="h1"><?php echo $cat ['CatHeaderTitle']?> <?php echo $data['nombre'],"!" ?></h1>
            <img src="<?php echo $data['imagenedit'] ?>" id="pet_pic">
            <h3><?php echo $cat ['CatStep1'] ?></h3>
            <p><?php echo $data['edad'] ?> <?php echo $cat ['CatStep1Desc'] ?></p><br>
            <h3><?php echo $cat ['CatStep2'] ?></h3>
            <p><?php 
                if ($data['genero']=="Macho") {
                ?>   
                    <?php echo $cat ['CatStep2Desc1'] ?>
                <?php }else if ($data['genero']=="Hembra") {
                ?>
                    <?php echo $cat ['CatStep2Desc2']?>
                <?php } ?>   
            </p><br>
            <h3><?php echo $cat ['CatStep2.5'] ?></h3>
            <p>
                <?php echo $data['descripcion'] ?>
            </p><br>
            <h3><?php echo $cat ['CatStep3'] ?></h3><br>
            <a href="../../pets.php"><button class="boton"><?php echo $cat ['CatBottom1'] ?></button></a>
            <span id="boton"></span>
        </div>
</div>
        <div id="foot"></div>
    </body>
</html>