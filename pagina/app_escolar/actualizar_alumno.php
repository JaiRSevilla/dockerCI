<?php
$idalumno=$_POST["idalumno"];
$nombre_alumno=$_POST["nombre_alumno"];
$a_paterno=$_POST["a_paterno"];
$a_materno=$_POST["a_materno"];
$fecha_nac=$_POST["fecha_nac"];
$curp=$_POST["curp"];
$matricula=$_POST["matricula"];
$fkgrupo=$_POST["fkgrupo"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];

require_once("clases/clases_alumno.php");
$alumno=new Alumno();

$resultado=$alumno->actualizar($nombre_alumno, $a_paterno, $a_materno, $fecha_nac, $curp, 
			$matricula, $fkgrupo, $correo, $telefono, $idalumno);

if($resultado) {
	echo "Actualizado Exitosamente!!! ";
} else {
	echo "No se actualizó :( ";
}
 ?>