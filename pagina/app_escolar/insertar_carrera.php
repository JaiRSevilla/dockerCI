<?php
$nombre_carrera=$_POST["nombre_carrera"];
$abreviatura=$_POST["abreviatura"];

$archivo=$_FILES['imagen']['tmp_name'];
$nombre_archivo=$_FILES['imagen']['name'];

move_uploaded_file($archivo, "img/".$nombre_archivo);

require_once("clases/clases_carrera.php");
$carrera=new Carrera();

$resultado=$carrera->insertar($nombre_carrera, $abreviatura, $nombre_archivo);

if($resultado) {
	echo "Guardado... ";
} else {
	echo "No se guardó :( ";
}
?>