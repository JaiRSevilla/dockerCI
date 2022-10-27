<?php 

$idalumno=$_GET["idalumno"];
 
 require_once("clases/clases_alumno.php");

 $alumno=new Alumno();

 $resultado=$alumno->eliminar($idalumno);

 if ($resultado) {
 	echo "Eliminado!";
 }else{
 	echo "No se eliminó";
 }
 
 ?>
