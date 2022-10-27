<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
	header("location: inicio_sesion.php");
}
 ?>
<?php 
require_once("clases/clases_carrera.php");
$carrera=new Carrera();

$registros=$carrera->mostrar();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Lista de carreras</title>
 	<link rel="stylesheet" type="text/css" href="estilo.css">
 </head>
 <body>
 	<div align="center">
 		<table border="2px solid">
 			<thead>
 				<th>Carrera</th>
 				<th>Abreviatura</th>
 				<th>Imagen</th>
 				<th>Opciones</th>
 			</thead>
 			<tbody>
 				<?php 
 					while($fila=mysqli_fetch_array($registros)){
 				?>
 					<tr>
 						<td><?=$fila["nombre_carrera"]?>
 						</td>
 						<td><?=$fila["abreviatura"]?>
 						</td>
 						<td><img width="100px" src="img/<?=$fila['imagen']?>"> 							
 						</td>
 						<td>
 							<a href="editar_carrera.php?idcarrera=<?=
 							$fila['idcarrera']?>">Editar</a></td>
 							<a href="baja_carrera.php?idcarrera=?=
 							$fila['idcarrera']?>">Dar de baja</a>
 							<a href="eliminar_carrera.php?idcarrera=<?=
 							$fila['idcarrera']?>">Eliminar</a>
 					</tr>
 				<?php  		
 					}
 				 ?>
 			</tbody>
 		</table>

 	</div>
 </body>
 </html>


