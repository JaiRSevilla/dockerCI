<?php 
$idalumno=$_GET["idalumno"];

require_once("clases/clases_alumno.php");
$alumno=new Alumno();
$datos=$alumno->buscarPorId($idalumno);

while ($fila=mysqli_fetch_array($datos)){
 
	require_once("clases/clases_grupo.php");
	$grupo=new Grupo();
	$registros=$grupo->mostrar();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body align="center">
	<form action="actualizar_alumno.php" 
	method="POST" enctype="multipart/form-data">
		<h2>Modificar datos del alumno</h2>
		<input value="<?=$fila['idalumno']?>" type="hidden" name="idalumno">
		Nombre: <br>
		<input value="<?=$fila['nombre_alumno']?>" type="text" name="nombre_alumno"> <br><br>
		Apellido paterno: <br>
		<input value="<?=$fila['a_paterno']?>" type="text" name="a_paterno"> <br><br>
		Apellido materno: <br>
		<input value="<?=$fila['a_materno']?>" type="text" name="a_materno"> <br><br>
		Fecha de nacimiento: <br>
		<input value="<?=$fila['fecha_nac']?>" type="date" name="fecha_nac"> <br><br>
		curp: <br>
		<input value="<?=$fila['curp']?>" type="text" name="curp"> <br><br>
		Matricula: <br>
		<input value="<?=$fila['matricula']?>" type="text" name="matricula"> <br><br>
		Correo: <br>
		<input value="<?=$fila['correo']?>" type="email" name="correo"> <br><br>
		Telefono: <br>
		<input value="><?=$fila['telefono']?>" type="text" name="telefono"> <br><br>
		Foto: <br>
		<input type="file" name="foto"> <br><br>
		Grupo: <br>
		<select name="fkgrupo">
			<option value="">Selecciona el grupo</option>
			<?php
				while($fila2=mysqli_fetch_array($registros)){
			?>
				<option value="<?=$fila2['idgrupo']?>"><?=$fila2["nombre_grupo"]?></option>
			<?php
				}
			?>
		</select> <br><br>
	<input type="submit" name="Guardar">
	</form>
</body>
</html>
 <?php 
}
  ?>
