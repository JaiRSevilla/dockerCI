<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
	header("location: inicio_sesion.php");
}
 ?>
<?php 
require_once("clases/clases_grupo.php");
$grupo=new Grupo();

$registros=$grupo->mostrar();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Lista de grupos</title>
 	<link rel="stylesheet" type="text/css" href="estilo.css">
 </head>
 <body>
 	<div align="center">
 		<table border="2px solid">
 			<thead>
 				<th>Grupo</th>
 				<th>Carrera</th>
 				<th>Opciones</th>
 			</thead>
 			<tbody>
 				<?php 
 					while($fila=mysqli_fetch_array($registros)){
 				?>
 					<tr>
 						<td><?=$fila["nombre_grupo"]?>
 						</td>
 						<td><?=$fila["nombre_carrera"]?>
 						</td>	
 						<td>
 							<a href="editar_grupo.php?idgrupo=
 							<?=$fila['idgrupo']?>">Editar</a>
 							<a href="baja_grupo.php?idgrupo=?=
 							$fila['idgrupo']?>">Dar de baja</a>
 							<a href="eliminar_grupo.php?idgrupo=<?=
 							$fila['idgrupo']?>">Eliminar</a>
 						</td>					
 					</tr>
 				<?php  		
 					}
 				 ?>
 			</tbody>
 		</table>

 	</div>
 </body>
 </html>