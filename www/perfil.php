<html>
<head>
 <!-- 
	<?php
// revisa si se reciven datos
	if(isset($_GET) AND $_GET["nombre"]<>""){
		echo "<title>".$_GET["nombre"]."</title>";
	}
	?>
 -->
	<meta charset="utf8">
</head>
<body>

<?php
include_once("includes/database.php");
if(isset($_GET)){
// echo $_GET["entrar"];
	 if(isset($_GET["registrar"])){
		echo "bbbbbbbbbb".$_GET["registrar"];
		header ("Location: includes/crearusuario.php?nombre=".$_GET["nombre"]." & contrasena=".$_GET["contrasena"]." & registrar=".$_GET["registrar"]." & entrar=".$_GET["entrar"]  );
	}else if(isset($_GET["entrar"])){

		
		// revisa si se reciven datos
		if($_GET["nombre"]<>""){

			$nombre = $_GET["nombre"];
			$contrasena=$_GET["contrasena"];

			// selecciona el nombre correspondiente al código
			$query= "SELECT * from taller1.usuarios WHERE  usuario='".$nombre."' AND contrasena='".$contrasena."'";
			$resultado=mysqli_query($conexion,$query);

			$usu=mysqli_fetch_array($resultado)["usuario"];


			if($usu<>""){
				echo "<h3>Tareas de ".$usu.":</h3>";

				// muestra una tabla correspondiente a las notas del código recivido
				$query = "SELECT tareas.tarea As tarea, tareas.descripcion As descripcion FROM taller1.tareas join taller1.usuarios join taller1.tareasdeusuarios on tareas.tarea=tareasdeusuarios.tarea and usuarios.usuario=tareasdeusuarios.usuario  WHERE usuarios.usuario='".$nombre."'";

				$resultado=mysqli_query($conexion,$query);
				// hace una tabla en la que organiza los datos recibidos del sql
				// en esta página encontre como organizar la tabla: http://www.elticus.com/?contenido=113
				if($resultado<>""){
					echo" <table border=1 cellpadding=4 cellspacing=0> <tr>   <th>Tarea</th>  <th>Descripcion</th>  </tr>";
					while ($row = mysqli_fetch_array($resultado)) {
						echo "<tr><td>".$row['tarea']."</td><td>".$row['descripcion']."</td></tr>";
					}
				}else{
					echo"<h3>No hay tareas asignadas</h3>";
				}
				echo "</table>";
			}else{ 
				// si no se recive ningún dato va a la tabla de notas de todos los estudiantes
				header ("Location: index.php?mensaje=El usuario o la contraseña es incorrecto.");
			}
		}
	}else{
		echo "coso feo";
	}
}
?>
</body>
</html>