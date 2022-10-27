<?php 
$idgrupo=$_GET["idgrupo"];
 
 require_once("clases/clases_grupo.php");

 $grupo=new Grupo();

 $resultado=$grupo->baja($idgrupo);

 if ($resultado) {
 	echo "Dado de baja!";
 }else{
 	echo "Error!";
 }
 
 ?>