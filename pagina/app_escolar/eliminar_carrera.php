<?php 

$idcarrera=$_GET["idcarrera"];
 
 require_once("clases/clases_carrera.php");

 $carrera=new Carrera();

 $resultado=$carrera->eliminar($idcarrera);

 if ($resultado) {
 	echo "<meta http-equiv='REFRESH' content='0; url=lista_carrera.php'
 		> <script type='text/javascript'>
 			alert('Se ha eliminado la carrera!');
 			</script>";
 }else{
 	echo "<meta http-equiv='REFRESH' content='0; url=lista_carrera.php'
 		> <script type='text/javascript'>
 			alert('No se pudo eliminar la carrera!');
 			</script>";
 }
 
 ?>
