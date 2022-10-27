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
	<link rel="stylesheet" type="text/css" href="estilo.css?x=13">
</head>
<body align="center">
<h1>Bienvenido</h1>
<a href="formulario_carrera.php">Registrar nueva carrera</a>
<br><br>
<a href="formulario_grupo.php">Registrar nuevo grupo</a>
<br><br>
<a href="formulario_alumno.php">Registrar nuevo alumno</a>
<br> <br> <br>
<a href="lista_carrera.php">Ver lista de carreras</a>
<br><br>
<a href="lista_grupo.php">Ver lista de grupos</a>
<br> <br>
<a href="lista_alumno.php">Ver lista de alumnos</a>
<br><br>
<br>
</body>
</html>