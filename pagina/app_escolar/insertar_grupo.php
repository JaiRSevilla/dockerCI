<?php
$nombre_grupo=$_POST["nombre_grupo"];
$fkcarrera=$_POST["fkcarrera"];

require_once("clases/clases_grupo.php");
$grupo=new Grupo();

$resultado=$grupo->insertar($nombre_grupo, $fkcarrera);

if($resultado) {
	echo "Guardado... ";
} else {
	echo "No se guardó :( ";
}
 ?>