<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>La Manada | Iniciar sesión</title>
	<link rel="stylesheet" type="text/css" href="../css/form_login.css">
	<link rel="stylesheet" href="../css/footer_style.css">
	<link rel="stylesheet" href="../css/navbar2_style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
</head>
<body>
	
	<header>
		<nav>
			<div class="menu">
				<div class="logo">
					<a href="../index.html"><img src="../src/logos/logo_circle_full.svg" alt=""></a>
				</div>
				<div class="menucontent">
					<a href="../index.html">Inicio</a>
					<p>|</p>
					<a href="../pets.html">Mascotas</a>
					<p>|</p>
					<a href="../guides.html">¿Cómo Adoptar?</a>
					<p>|</p>
					<a href="../contact.html">Contacto</a>
				</div>
			</div>
		</nav>
	</header>

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
	<footer>
		<div class="container_footer">
			<h2>Fundación La manada © 2021
                <a href="https://www.instagram.com/la.manadasv/"target="blank"><img id="img_footer" src="../src/icons/instagram.svg" width="40px" height="40px"></a>
				<a href="https://www.facebook.com/profile.php?id=100070244422672" target="blank"><img id="img_footer" src="../src/icons/facebook.svg" width="40px" height="40px"></a>
            </h2>
            <hr>
            <h5>Diseñado por Grupo 8</h5>
		</div>
	</footer>
</body>
</html>