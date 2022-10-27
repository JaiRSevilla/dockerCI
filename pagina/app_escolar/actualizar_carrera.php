<?php
$idcarrera=$_POST["idcarrera"];
$nombre_carrera=$_POST["nombre_carrera"];
$abreviatura=$_POST["abreviatura"];

require_once("clases/clases_carrera.php");
$carrera=new Carrera();

$resultado=$carrera->actualizar($nombre_carrera, $abreviatura, $idcarrera);

if($resultado) {
	echo "Actualizado Exitosamente!!! ";
} else {
	echo "No se actualizó :( ";
}
?>