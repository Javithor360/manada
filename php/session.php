<?php session_start();
	if(isset($_SESSION['email'])) {
		echo 	'<a href="logout.php">
					<button class="login">
						Cerrar Sesión
					</button>
								</a>';
		}else{
			echo 	'<a href="login.php">
						<button class="login">
							Iniciar Sesión
						</button>
					</a>';
			}
?>
