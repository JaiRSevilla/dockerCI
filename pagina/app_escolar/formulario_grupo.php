<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
	header("location: inicio_sesion.php");
}
 ?>
 
<?php
require_once("clases/clases_carrera.php");
$carrera=new Carrera();
$registros=$carrera->mostrar();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body align="center">
	<form action="insertar_grupo.php" method="POST">
		<h2>registrar nuevo</h2>
		Grupo: <br>
		<input type="text" name="nombre_grupo"> <br><br>
		Carrera: <br>
		<select name="fkcarrera">
			<option value="">Selecciona la carrera</option>
			<?php
				while($fila=mysqli_fetch_array($registros)){
			?>
				<option value="<?=$fila['idcarrera']?>"><?=$fila["nombre_carrera"]?></option>
			<?php
				}
			?>
		</select> <br><br>
	<input type="submit" name="Guardar">
	</form>
</body>
</html>