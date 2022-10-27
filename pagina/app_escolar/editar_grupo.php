<?php 
$idgrupo=$_GET["idgrupo"];

require_once("clases/clases_grupo.php");
$grupo=new Grupo();
$datos=$grupo->buscarPorId($idgrupo);

while ($fila=mysqli_fetch_array($datos)){
 
	require_once("clases/clases_carrera.php");
	$carrera=new Carrera();
	$registros=$carrera->mostrar();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body align="center">
	<form action="actualizar_grupo.php" method="POST">
		<h2>Modificar datos del grupo</h2>
		<input value="<?=$fila['idgrupo']?>" type="hidden" name="idgrupo">
		Grupo: <br>
		<input value="<?=$fila['nombre_grupo']?>" type="text" name="nombre_grupo"> <br><br>
		Carrera: <br>
		<select name="fkcarrera">
			<option value="<?=$fila['idcarrera']?>"><?=$fila['nombre_carrera']?></option>
			<?php
				while($fila2=mysqli_fetch_array($registros)){
			?>
				<option value="<?=$fila2['idcarrera']?>"><?=$fila2["nombre_carrera"]?></option>
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