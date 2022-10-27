<?php
$idgrupo=$_POST["idgrupo"];
$nombre_grupo=$_POST["nombre_grupo"];
$fkcarrera=$_POST["fkcarrera"];

require_once("clases/clases_grupo.php");
$grupo=new Grupo();

$resultado=$grupo->actualizar($nombre_grupo, $fkcarrera, $idgrupo);

if($resultado) {
	echo "Actualizado Exitosamente!!! ";
} else {
	echo "No se actualizó :( ";
}
?>