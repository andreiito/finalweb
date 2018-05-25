<header>
	<nav class="nav_static nav_disp_block">
		<a href="" class="nav_logo"><img src="img/logo.png" class="img_logo" aria-label="carrito"></a>
			<button class="boton_hamburguesa hamburguesa_derecha" aria-label="Desplegar men&uacute;" aria-expanded="false">
		<span class="icono_boton"></span>
		<span class="icono_boton"></span>
		<span class="icono_boton"></span>
			</button>
			
			<ul class="lista_menu">
			<!--Todos los usuarios-->
			<?php session_start(); 
				if(!$_SESSION['usuario']){
					
						echo "<li  class=\"link\"><a  href=\"login.php\" aria-label=\"Iniciar Sesi&oacute;n\">Iniciar sesi&oacute;n</a></li>";
						echo "<li class=\"link\"><a href=\"registro.php\" aria-label=\"Registrarse en la p&aacute;gina\">Registrarse</a></li>";

				}
			//Cliente

				if(isset($_SESSION['usuario'])){
					echo "<li class=\"link\"><a  href=\"\" aria-label=\"Mi Sesi&oacute;n\">Mi sesi&oacute;n</a><ul>";	
						echo "<li class=\"\"><a href=\"baja.php\" aria-label=\"Cancelar mi suscripción\">Dar de baja mi cuenta</a></li>";
						echo "<li class=\"\"><a href=\"cerrar_sesion.php\" aria-label=\"Salir de la sesi&oacute;n\">Cerrar Sesi&oacute;n</a></li>";
						echo "<li class=\"\"><a href=\"carrito.php\" aria-label=\"Ir a mi carrito\">Carrito</a></li>";
					echo "</ul></li>";
					echo "<li class=\"link\"><a href=\"articulos.php\" aria-label=\"Ver los articulos\">Articulos</a></li>";

					if($_SESSION['tipo']=='venta'){
						echo "<li class=\"link\"><a  href=\"\" aria-label=\"Articulos\">Gestionar Art&iacute;culos</a><ul>";
							echo "<li class=\"link\"><a href=\"registro_articulos.php\" aria-label=\"Dar de Alta art&iacute;culo\">Agregar Art&iacute;culos</a></li>";
							echo "<li class=\"link\"><a href=\"eliminar_articulo.php\" aria-label=\"Dar de baja art&iacute;culo\">Eliminar Art&iacute;culos</a></li>";
							echo "<li class=\"link\"><a href=\"modificar_articulo.php\" aria-label=\"Editar art&iacute;culo\">Modificar Art&iacute;culos</a></li>";
						echo "</ul></li>";
					}
					if($_SESSION['tipo']=='admin'){
						//Clientes
						echo "<li class=\"link\"><a  href=\"\" aria-label=\"usuarios\">Gestionar Usuarios</a><ul>";
							echo "<li class=\"\"><a href=\"registro.php\" aria-label=\"Dar de alta a Usuario\">Agregar Usuario</a></li>";
							echo "<li class=\"\"><a href=\"baja.php\" aria-label=\"Dar de baja a Usuario\">Eliminar Usuario </a></li>";
						echo "</ul></li>";
						//Articulos
						echo "<li class=\"link\"><a  href=\"\" aria-label=\"Articulos\">Gestionar Art&iacute;culos</a><ul>";
							echo "<li class=\"\"><a href=\"registro_articulos.php\" aria-label=\"Dar de Alta art&iacute;culo\">Agregar Art&iacute;culos</a></li>";
							echo "<li class=\"\"><a href=\"eliminar_articulo.php\" aria-label=\"Dar de baja art&iacute;culo\">Eliminar Art&iacute;culos</a></li>";
							echo "<li class=\"\"><a href=\"modificar_articulo.php\" aria-label=\"Editar art&iacute;culo\">Modificar Art&iacute;culos</a></li>";
						echo "</ul></li>";

					}
	 	}
	 	?>
				
			</ul>
		</nav>
	</header>
