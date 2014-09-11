<html>
<head>
	<title>Tareas</title>
	<meta charset="utf8">
	<link rel="stylesheet" hreF="css/style.css"> 
</head>
<body>


	<div id="navegacion">
		<h2> <a id="enlace" href="tareas.php">Tareas</a> | <a  id="enlace" href="tareasdeusuariosphp">Tareas de usuarioss</a> </h2></br>
	</div>





	<div id="tabla">
		<?php 
		include_once("includes/database.php");
// selecciona todo los campos de la tabla de notas
		$query = "SELECT * FROM taller1.Tareas ORDER BY tareas.prioridadD";
		$resultado=mysqli_query($conexion,$query);

// hace una tabla en la que organiza los datos recibidos del sql
// en esta página encontre como organizar la tabla: http://www.elticus.com/?contenido=113
		echo" <table border=1 cellpadding=4 cellspacing=0> <tr>   <th>Tareas</th>  <th>Descripción</th>   <th>Prioridad</th> <th>Creación</th> <th>Finalización</th></tr>";
		while ($row = mysqli_fetch_array($resultado)) {
			echo "<tr><td>".$row["tarea"]."</td><td>".$row["descripcion"]."</td><td>";

			$pri=$row["prioridad"];
			if($pri==1){
				echo "Alta";
			}else if($pri==2){
				echo "Media";
			}else if($pri==3){
				echo "Baja";
			}

			echo "</td><td>".$row["creacion"]."</td><td>".$row["finalizacion"]."</td> </tr>";
		}
		echo "</table>";

		?>
	</div>



	<!-- formulario que recibe el identificador de una nota, el nombre de una nota, u el porcentaje de una nota para registrarla como una nueva nota -->

	<form name="formulario prueba" id="formulario_tareas" method="POST" action="includes/creartarea.php">
		<label>Nombre:	</label><input type="text" name="tarea" id="tarea"><br>
		<label>Descripción:</label><input type="text" name="descripcion" id="descripcion"><br>

		<label>Prioridad:</label>
		<select name="prioridad">
			<option value="1">Alta</option>
			<option value="2">Media</option>
			<option value="3">Baja</option>
		</select>
		<br>
		<!-- como organizar los elementos e select http://www.aulaclic.es/html/epp_8_3_1.htm -->


		<label>Fecha inicio:	</label><br>
		<label>Día:	</label>
		<select name="dia_i">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select> 
		<label>Mes:	</label>
		<select name="mes_i">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<label>Año:	</label>
		<select name="an_i">
			<option value="1">2010</option>
			<option value="1">2011</option>
			<option value="2">2012</option>
			<option value="3">2013</option>
			<option value="3">2014</option>
		</select>
		<label>Fecha inicio:	</label><br>
		<label>Día:	</label>
		<select name="dia_f">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select> 
		<label>Mes:	</label>
		<select name="mes_f">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<label>Año:	</label>
		<select name="an_f">
			<option value="1">2014</option>
			<option value="1">2015</option>
			<option value="2">2016</option>
			<option value="3">2017</option>
			<option value="3">2018</option>
		</select>

		<input type="submit" value="Enviar">
	</form>


</body>
</html>