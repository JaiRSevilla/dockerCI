<?php 
$idalumno=$_GET["idalumno"];
 
 require_once("clases/clases_alumno.php");

 $alumno=new Alumno();

 $resultado=$alumno->baja($idalumno);

 if ($resultado) {
 	echo "Dado de baja!";
 }else{
 	echo "Error!";
 }
 
 ?>