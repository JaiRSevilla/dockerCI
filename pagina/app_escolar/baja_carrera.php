<?php 

$idcarrera=$_GET["idcarrera"];
 
 require_once("clases/clases_carrera.php");

 $carrera=new Carrera();

 $resultado=$carrera->baja($idcarrera);

 if ($resultado) {
 	echo "Dado de baja!";
 }else{
 	echo "Error!";
 }
 
 ?>
