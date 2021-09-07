<?php
		include('php/define_lang.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $login['pageLoginTitle'] ?></title>
	<link rel="stylesheet" type="text/css" href="../css/form_login.css">
	<link rel="stylesheet" href="../css/footer_style.css">
	<link rel="stylesheet" href="../css/navbar2_style.css">
    <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
    <script type="text/javascript" src="../js/navfootMaker.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
</head>
<body>
	
	<div id="navy"></div>

	<main>
		<div class="container">	

	<div class="body">
        
        <div class="forms">
			<h2 class="info"><?php echo $login['loginHeader'] ?></h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            
            <div class="inputs">
                <input type="email" name="email" id="Email" required autocomplete="nope" placeholder="<?php echo $login['loginEmailPlaceholder'] ?>">
                <label for="email"><?php echo $login['loginEmail'] ?> *</label>
            </div>

             <div class="inputs">
                <input type="password" name="pw" id="pw" required autocomplete="nope">
                <label for="pw"><?php echo $login['loginPassword'] ?> *</label>
            </div>

             <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <div class="button"> <button id="submit" type="submit"><?php echo $login['loginButton'] ?></button> </div>

            <p><?php echo $login['loginNotAcc'] ?> <a href="registro.php"><?php echo $login['loginSignUp'] ?></a></p>
            </div>
        
			

        </form>
        </div>
    </div>
</div>
	</main>

	<div id="foot"></div>
</body>
</html>