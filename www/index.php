<html>
<head>
	<title>Index</title>
	<meta charset="utf8">
	<link rel="stylesheet" hreF="css/style.css"> 
</head>
<body>

	<!-- enlaces a las tareas -->
	<div id="navegacion">
		<h2> <a id="enlace" href="tareas.php">Tareas</a> | <a  id="enlace" href="tareasdeusuariosphp">Tareas de usuarioss</a> </h2></br>
	</div>


	<?php
	if(isset($_GET["mensaje"])){
		if($_GET["mensaje"]<>""){
			echo "<h3>".$_GET["mensaje"]."</h3>";
		}
	}

	?>



	<!-- formulario que recibe el nombre y la contraseña con el cual se puede ingresar o registtrar -->
	<form name="formulario prueba" id="formulario_registro" method="GET" action="perfil.php">
		<label>Nombre:  </label><br><input type="text" name="nombre" id="nombre"  class="formulario_datos"><br> 
		<label>Contraseña:	</label><br><input type="password" name="contrasena" id="contrasena"  class="formulario_datos"><br><br>
		<input type="submit" value="entrar" name="entrar" id="entrar" class="formulario_datos"> <input type="submit" value="registrar" name="registrar" id="registrar" class="formulario_datos" style="float:right">
	</form>


</body>
</html>