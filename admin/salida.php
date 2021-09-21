<?php 
    require '../php/printuser-validation.php';
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fundación La Manada</title>
        <link rel="shortcut icon" href="../src/logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../css/admin_dashboard.css">
    </head>
    <body>
        
        <header>
            <div class="izquierda">
                <h3>Fundación <span>La Manada</span></h3>
                <!-- <center><img src="../src/logos/logo_full.svg" alt="Logo"></center> -->
            </div>
            <div class="derecha">
                <label for="btn" class="button"><?php echo($username); ?>
                    <img src="../src/icons/down-arrow-icon.svg" alt="">
                </label>
                    <input type="checkbox" id="btn">
                    <ul class="list">
                        <li id="bottom">
                            <a href="../php/admin-logout.php">
                                <label>Cerrar sesión
                                    <img  src="../src/icons/logout-icon.svg" alt="">
                                </label>
                            </a>
                        </li>
                    </ul>
            </div>
        </header>

        <div class="sidebar">
            <div class="pf_info">
                <img src="../src/logos/icon.png" class="pfp" alt="Administrador">
                <h4>Panel de administrador</h4>
            </div>
            <a href="./entrada.php" class="list"><span>Solicitudes de entrada</span></a>
            <a href="./salida.php" class="list active"><span>Solicitudes de adopción</span></a>
        </div>

        <div class="content">
            <div class="card">
                <h1> Solicitudes para Adoptar </h1>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th> ID </th>
								<th> Nombre Dueño </th>
                                <th> Nombre Mascota </th>
								<th> Usuario interesado </th>
                                <th> Razón </th>
                                <th> Acción </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        <?php 
                                $conexion=mysqli_connect('localhost','root','','admin',);
                             ?>
                             <?php 
                                $sql="SELECT * FROM output";
                                $result=mysqli_query($conexion, $sql);
                                while ($data=mysqli_fetch_array($result)) {
                                    // code...
                              ?>
                            <tr>
                                <td> #<?php echo $data['idSalida'] ?> </td>
                                <td> <?php echo $data['originalOwner'] ?> </td>
                                <td> <?php echo $data['petName'] ?> </td>
                                <td> <?php echo $data['newOwner'] ?> (<?php echo $data['emailNewOwner'] ?>) </td>
                                <td> <?php echo $data['reason'] ?> </td>
                                <td>
                                    <span class="action">
                                        <a href="../acept_sendmail.php">Aceptar</a>
                                        <a href="../decline_sendmail.php">Denegar</a>
                                    </span>
                                </td>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>