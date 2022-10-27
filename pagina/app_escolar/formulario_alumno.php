<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
	header("location: inicio_sesion.php");
}
 ?>
<?php
require_once("clases/clases_grupo.php");
$grupo=new Grupo();
$registros=$grupo->mostrar();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body align="center">
	<form action="insertar_alumno.php" 
	method="POST" enctype="multipart/form-data">
		<h2>registrar alumno nuevo</h2>
		Nombre: <br>
		<input type="text" name="nombre_alumno"> <br><br>
		Apellido paterno: <br>
		<input type="text" name="a_paterno"> <br><br>
		Apellido materno: <br>
		<input type="text" name="a_materno"> <br><br>
		Fecha de nacimiento: <br>
		<input type="date" name="fecha_nac"> <br><br>
		curp: <br>
		<input type="text" name="curp"> <br><br>
		Matricula: <br>
		<input type="text" name="matricula"> <br><br>
		Correo: <br>
		<input type="email" name="correo"> <br><br>
		Telefono: <br>
		<input type="text" name="telefono"> <br><br>
		Foto: <br>
		<input type="file" name="foto"> <br><br>
		Grupo: <br>
		<select name="fkgrupo">
			<option value="">Selecciona el grupo</option>
			<?php
				while($fila=mysqli_fetch_array($registros)){
			?>
				<option value="<?=$fila['idgrupo']?>"><?=$fila["nombre_grupo"]?></option>
			<?php
				}
			?>
		</select> <br><br>
	<input type="submit" name="Guardar">
	</form>
</body>
</html>