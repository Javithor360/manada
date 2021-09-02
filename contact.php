<?php session_start();
        $login = isset($_SESSION['email']);   
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
	<script type="text/javascript">window.session = "<?php echo $login ?>";</script>
	<title>Contact ∙ La Manada</title>
</head>
<body>
<div class="fBody">	
	<div id="navy"></div>

	<main>
		<div class="container">
		<div class="form">
			<form action="./php/mailsender.php" method="POST">
				<label id="title1">Contact us!</label>
				<label id="title2">Leave a comment, question or feedback.</label>
				<input type="text" name="nombre" placeholder="Name">
				<input placeholder="E-mail address" type="email" name="email" autocomplete="off" required="">
				
					<textarea id="textbox" required="" name="mensaje" placeholder="What do you need?"></textarea>
				
				<button id='enviar'type="submit">
					Send
				</button>
			</form>
		</div>
	</div>
	</main>
	<div id="foot"></div>
</div>
</body>
</html>