<?php session_start();
        $login = isset($_SESSION['email']);   
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>La Manada | Iniciar sesión</title>
	<link rel="stylesheet" type="text/css" href="../css/form_login.css">
	<link rel="stylesheet" href="../css/footer_style.css">
	<link rel="stylesheet" href="../css/navbar2_style.css">
	<script type="text/javascript">window.session = "<?php echo $login ?>";</script>
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
			<h2 class="info">Bienvenido de nuevo</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            
            <div class="inputs">
                <input type="email" name="email" id="Email" required autocomplete="nope" placeholder="loveanimals@example.com">
                <label for="email">Correo electrónico *</label>
            </div>

             <div class="inputs">
                <input type="password" name="pw" id="pw" required autocomplete="nope">
                <label for="pw">Contraseña *</label>
            </div>

             <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <div class="button"> <button id="submit" type="submit">Iniciar sesión</button> </div>

            <p>¿Todavía no tienes cuenta? <a href="registro.php">Regístrate.</a></p>
            </div>
        
			

        </form>
        </div>
    </div>
</div>
	</main>

	<div id="foot"></div>
</body>
</html>