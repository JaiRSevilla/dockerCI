<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
	header("location: inicio_sesion.php");
}
 ?>
<?php 
require_once("clases/clases_alumno.php");
$alumno=new Alumno();

$registros=$alumno->mostrar();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Lista de alumnos</title>
 	<link rel="stylesheet" type="text/css" href="estilo.css">
 </head>
 <body>
 	<div align="center">
 		<table border="2px solid">
 			<thead>
 				<th>Nombre</th>
 				<th>Apellido paterno</th>
 				<th>Apellido materno</th>
 				<th>Fecha de nacimiento</th>
 				<th>CURP</th>
 				<th>Matricula</th>
 				<th>Grupo</th>
 				<th>Carrera</th>
 				<th>Correo</th>
 				<th>Teléfono</th>
 				<th>Imagen</th>
 				<th>Opciones</th>
 			</thead>
 			<tbody>
 				<?php 
 					while($fila=mysqli_fetch_array($registros)
 						) {
 				?>
 					<tr>
 						<td><?=$fila["nombre_alumno"]?>
 						</td>
 						<td><?=$fila["a_paterno"]?>
 						</td>
 						<td><?=$fila["a_materno"]?> 							
 						</td>
 						<td><?=$fila["fecha_nac"]?> 							
 						</td>
 						<td><?=$fila["curp"]?>							
 						</td>
 						<td><?=$fila["matricula"]?> 							
 						</td>
 						<td><?=$fila["nombre_grupo"]?>
 						</td>
 						<td><?=$fila["nombre_carrera"]?>
 						</td>
 						<td><?=$fila["correo"]?>
 						</td>
 						<td><?=$fila["telefono"]?>
 						</td>
 						<td><img width="100px" src="img/<?=$fila['foto']?>"> 							
 						</td>
 						<td>
 							<a href="editar_alumno.php?idalumno=
 							<?=$fila['idalumno']?>">Editar</a>
 							<a href="baja_alumno.php?idalumno=?=
 							$fila['idalumno']?>">Dar de baja</a>
 							<a href="eliminar_alumno.php?idalumno=<?=
 							$fila['idalumno']?>">Eliminar</a>
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