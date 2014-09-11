	<?php
	// revisa si se reciven datos
	if(isset($_GET) and $_GET["nombre"] <> ""){
		include_once("database.php");
		$nombre = $_GET["nombre"];
		$contra = $_GET["contrasena"];
		$entrar= $_GET["entrar"];
		$registrar=$_GET["registrar"];
		echo "se ha registrado: ".$nombre." ".$contra;

		$query= "SELECT * from taller1.usuarios WHERE  usuario='".$nombre."'";

		
		$result=mysqli_query($conexion,$query);

		$re=mysqli_fetch_array($result)["usuario"];

		//pegunta si el nombre existe ara saber si agregarlo o no
		if($re==""){
			// registra un estudiante con los datos obtenidos
			$query = "INSERT INTO taller1.usuarios(`usuario`, `contrasena`) VALUES ('".$nombre."','".$contra."')";

			mysqli_query($conexion,$query);
			echo "...se ha registrado: ".$nombre." ".$contra;
			// vuelve al perfil
			// header ("Loctaion: ../perfil.php?nombre= ".$nombre." & contrasena= ".$contrasena."  & entrar=entrar");
			// vuelve al inicio
			header ("Location: ../index.php?mensaje=El usuario ha sido creado satisfactoriamente.");	
			echo "aadnsodnas";
		}else{
			echo "aaaaaaaaaaaaaaaaaaa";
			header ("Location: ../index.php?mensaje=El usuario ya existe.");	
		}
	}
	?>