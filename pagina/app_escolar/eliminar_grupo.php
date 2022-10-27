<?php 

$idgrupo=$_GET["idgrupo"];
 
 require_once("clases/clases_grupo.php");

 $grupo=new Grupo();

 $resultado=$grupo->eliminar($idgrupo);

 if ($resultado) {
 	echo "Eliminado!";
 }else{
 	echo "No se eliminó";
 }
 
 ?>
