<?php  session_start();
        require 'php/username-conexion.php';
		include('php/define_lang.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./css/contact_style.css">
	<link rel="stylesheet" href="./css/navbar2_style.css">
	<link rel="stylesheet" href="./css/footer_style.css">
	<script src="./js/navfootMaker.js"></script>
	<script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", username: "<?php echo $username ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
	<title>Contacto ∙ La Manada</title>
</head>
<body>
<div class="fBody">	
	<div id="navy"></div>

	<main>
		<div class="container">
		<div class="form">
			<form  id="#form"action="./php/mailsender.php" method="POST" onSubmit="document.getElementById('enviar').disabled=true;">
				<label id="title1"> <?php echo $contact ['ContactHeaderTitle'] ?> </label>
				<label id="title2"> <?php echo $contact ['ContactHeaderDesc'] ?> </label>
				<input type="text" name="nombre" placeholder="<?php echo $contact ['ContactPlaceHolder1'] ?>" required="">
				<input placeholder="<?php echo $contact ['ContactPlaceHolder2'] ?>" type="email" name="email" autocomplete="off" required="">
					<textarea id="textbox" required="" name="mensaje" placeholder="<?php echo $contact ['ContactPlaceHolder3'] ?>"></textarea>
				<button id='enviar'type="submit">
					<?php echo $contact ['ContactSendButton'] ?>
				</button>
			</form>
		</div>
	</div>
	</main>
	<div id="foot"></div>
</div>
</body>
</html>