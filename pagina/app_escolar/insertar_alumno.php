<?php
$nombre_alumno=$_POST["nombre_alumno"];
$a_paterno=$_POST["a_paterno"];
$a_materno=$_POST["a_materno"];
$fecha_nac=$_POST["fecha_nac"];
$curp=$_POST["curp"];
$matricula=$_POST["matricula"];
$fkgrupo=$_POST["fkgrupo"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];

$archivo=$_FILES['foto']['tmp_name'];
$nombre_archivo=$_FILES['foto']['name'];
move_uploaded_file($archivo, "img/".$nombre_archivo);

require_once("clases/clases_alumno.php");
$alumno=new Alumno();

$resultado=$alumno->insertar($nombre_alumno, $a_paterno, $a_materno, $fecha_nac, $curp, 
			$matricula, $fkgrupo, $correo, $telefono, $nombre_archivo);

if($resultado) {
	echo "Guardado... ";
} else {
	echo "No se guardó :( ";
}
 ?>