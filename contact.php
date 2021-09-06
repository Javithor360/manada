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
				<label id="title1">Comunicate con nosotros!</label>
				<label id="title2">Dejános tu comentario, duda o sugerencia, será un gusto ayudarte</label>
				<input type="text" name="nombre" placeholder="Nombre" required="">
				<input placeholder="Correo electronico" type="email" name="email" autocomplete="off" required="">
					<textarea id="textbox" required="" name="mensaje" placeholder="Escribe aquí, ¿En que te podemos ayudar?"></textarea>
				<button id='enviar'type="submit">
					Enviar
				</button>
			</form>
		</div>
	</div>
	</main>
	<div id="foot"></div>
</div>
</body>
</html>