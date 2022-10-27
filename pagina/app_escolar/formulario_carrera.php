<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
	header("location: inicio_sesion.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body align="center">
	<form action="insertar_carrera.php" method="POST" enctype="multipart/form-data">
		<h2>Registrar nueva carrera</h2>
		Carrera: <br>
		<input type="text" name="nombre_carrera"> <br><br>
		Abreviatura: <br>
		<input type="text" name="abreviatura"> <br><br>
		Imagen: <br>
		<input type="file" name="imagen"> <br><br>
		<input type="submit" value="Guardar" name="">
	
	</form>

</body>
</html>