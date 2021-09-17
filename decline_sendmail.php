<html>
    <head>
      <title>Notificaciones aceptadas</title>
    <link rel="shortcut icon" href="./src/logos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/decline_style.css">
    </head>
    <body>
    <p>&#8592;</p>
        <div class="formu">
          <form action="php/decline_adopt.php" method="POST">
            <h1>Bienevenido a Notificaciones</h1> <br>
            <h2>A quien notificaremos su solicitud</h2>
            <input type="text" name="name" placeholder="Ingrese el nombre de el usuario" required><br>
            <h2>Cual sera el correo de envio</h2>
            <input type="email" name="email" placeholder="Ingrese el correo del usuario" required><br>
            
            <button type="submit">Enviar</button>
        </form>
        </div>
    </body>
</html>