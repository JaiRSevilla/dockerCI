<?php 
$idcarrera=$_GET["idcarrera"];

require_once("clases/clases_carrera.php");
$carrera=new Carrera();
$datos=$carrera->buscarPorId($idcarrera);

while ($fila=mysqli_fetch_array($datos)){
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body align="center">
	<form action="actualizar_carrera.php" method="POST" enctype="multipart/form-data">
		<h2>Modificar datos de la carrera</h2>
		Carrera: <br>
		<input value="<?=$idcarrera?>" type="hidden" name="idcarrera">
		<input value="<?=$fila['nombre_carrera']?>" type="text" name="nombre_carrera"> <br><br>
		Abreviatura: <br>
		<input value="<?=$fila['abreviatura']?>" type="text" name="abreviatura"> <br><br>
		Imagen: <br>
		<input type="file" name="imagen"> <br><br>
		<input type="submit" value="Guardar"name="">
	
	</form>
</body>
</html>
<?php 
}
 ?>