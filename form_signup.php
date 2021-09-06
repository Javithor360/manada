<?php  session_start();
        include('php/define_lang.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro ∙ La Manada</title>
	<link rel="stylesheet" href="../css/form_signup.css">
    <link rel="stylesheet" href="../css/navbar2_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <script type="text/javascript">window.navfoot = { lang: "<?php echo $_SESSION['lang']?>", session: "<?php echo $login ?>", navbar: { home: "<?php echo $navbar['home'] ?>", pets: "<?php echo $navbar['pets'] ?>", howAdopt: "<?php echo $navbar['howAdopt'] ?>", contact: "<?php echo $navbar['contact'] ?>", login: "<?php echo $navbar['login'] ?>" }, footer: { language: "<?php echo $footer['language'] ?>", languageOpc1: "<?php echo $footer['languageOpc1'] ?>", languageOpc2: "<?php echo $footer['languageOpc2'] ?>", title: "<?php echo $footer['title'] ?>", phrase: "<?php echo $footer['phrase'] ?>", copyright: "<?php echo $footer['copyright'] ?>" } }</script>
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
			<h2 class="info">Ingrese sus datos personales</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class='form'>
            
            <?php if(!empty($error)): ?>
            <div class="mensaje">
            	<br>
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <div class="inputs">
            <input type="text" id="names" name='name' required autocomplete="nope" size='10px'>
            <label for="names">Nombres *</label>
            </div>
            
            <div class="inputs">
            <input type="text" name="lastNames" id="lastName" required autocomplete="nope" placeholder="">
            <label for="lastName">Apellidos *</label>
            </div>

            <div class="inputs">
                <select name="gender" id="gender" class='gender'>
                    <option value="no"></option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
                <label for="gender">Género *</label>
            </div>

            <div class="inputs">
                <input type="email" name="email" id="Email" required autocomplete="nope" placeholder="loveanimals@example.com">
                <label for="email">Correo electrónico *</label>
            </div>

             <div class="inputs">
                <input type="password" name="pw" id="pw" required autocomplete="nope">
                <label for="pw">Contraseña *</label>
            </div>

            <div class="inputs">
                <input type="password" name="pwc" id="pwc">
                <label for="pwc">Confirmar contraseña *</label>
            </div>

            <div class="inputs">
                <input type="tel" name="tel" id="tel" required autocomplete="nope" pattern="[0-9]{4}-[0-9]{4}" placeholder="XXXX-XXXX">
                <label for="tel">Número de teléfono *</label>
            </div>

            <div class="inputs">
            <input type="date" name="bD" id="bDay" required>
            <label for="date">Día de nacimiento *</label>

            

            <div class="button"> <button id="submit" type="submit">Crear cuenta</button> </div>
            </div>

			<p>¿Ya tienes una cuenta? <a id='Login' href="login.php">Inicie sesión.</a></p>

        </form>
        </div>
    </div>
</div>
	</main>

    <div id="foot"></div>
</body>
</html>