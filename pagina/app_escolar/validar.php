<?php 
session_start();
$nombre=$_POST["nombre"];
$contraseña=$_POST["contraseña"];

require_once("clases/clases_usuario.php");
$usuario=new Usuario();

$resultado=$usuario->buscar($nombre, $contraseña);

$validacion=mysqli_num_rows($resultado);

if ($validacion==1) {
	$_SESSION["usuario"]=$nombre;
	header("location: index.php");
}else if($validacion==0){
	header("location: inicio_sesion.php");
}
 ?>


