<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrador | La manada</title>
	<link rel="stylesheet" href="../css/index-admin_style.css">
	<link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
</head>
<body>
	<h1>Fundación La manada | <span>Administrador</span></h1>
	<div class="container">
		<div class="form">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				<h2 class="info">Bienvenido de nuevo</h2>
				<form action="" class='form'>
				
				<div class="inputs">
					<input type="user" name="user" id="user" required autocomplete="off" placeholder="Ingresa tu usuario de Administrador">
				</div>

				<div class="inputs">
					<input type="password" name="pass" id="password" required autocomplete="off" placeholder="Contraseña">
				</div>

				<?php if(!empty($error)): ?>
            		<div class="mensaje">
                		<?php echo $error; ?>
            		</div>
            	<?php endif; ?>

            	<br>

				<div class="button"> <button id="submit" type="submit">Iniciar sesión</button> </div>

				
			</form>
		</div>
	</div>			
</body>
</html>