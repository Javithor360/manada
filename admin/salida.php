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
                                <th> Foto </th>
                                <th> Nombre Dueño </th>
                                <th> Nombre Mascota </th>
                                <th> Tipo </th>
                                <!-- <th> Edad </th> -->
                                <!-- <th> Raza </th> -->
                                <!-- <th> Caracteristicas </th> -->
                                <th> Nivel de atención </th>
                                <th> Vacunas </th>
                                <!-- <th> Descripción </th> -->
                                <th> Acción </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td> #001 </td>
                                <td> <img src="../src/example/frida.jpg" alt="Frida"> </td>
                                <td> Diego Vladimir García Fuentes </td>
                                <td> Frida </td>
                                <td> Perro (F) </td>
                                <td> Sin registro </td>
                                <td> Ninguna </td>
                                <td>
                                    <span class="action">
                                        <a href="#">Aceptar</a>
                                        <a href="#">Denegar</a>
                                    </span>
                                </td>
<!--                                 <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td> -->
                            </tr>
                            <tr>
                                <td> #002 </td>
                                <td> <img src="../src/example/harold.jpg" alt="Harold"> </td>
                                <td> Javier Enrique Mejía Flores </td>
                                <td> Harold </td>
                                <td> Gato (M) </td>
                                <td> Control veterinario </td>
                                <td> Leucemia, Rinotraqueitis, Calcivirosis, Rabia </td>
                                <td>
                                    <span class="action">
                                        <a href="#">Aceptar</a>
                                        <a href="#">Denegar</a>
                                    </span>
                                </td>
                            </tr>
<!--                             <tr>
                                <td> request.apply.id[0] </td>
                                <td> request.apply.pic[0] </td>
                                <td> request.apply.owner[0] </td>
                                <td> request.apply.petname[0] </td>
                                <td> request.apply.type[0] </td>
                                <td> request.apply.age[0] </td>
                                <td> request.apply.raza[0] </td>
                                <td> request.apply.characters[0] </td>
                                <td> request.apply.attentionlvl[0] </td>
                                <td> request.apply.vaccines[0] </td>
                                <td> request.apply.desc[0] </td>
                                <td>  </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<!--         <script>
            let list = document.querySelectorAll('.list');
            for (let i=0; i<list.length; i++) {
                list[i].onclick = function (){
                    let j = 0;
                    while(j < list.length){
                        list[j++].className = "list";
                    }
                    list[i].className = "list active";
                }
            }
        </script> -->
    </body>
</html>