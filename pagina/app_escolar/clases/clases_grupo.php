<?php
class Grupo{
	function __construct(){
		require_once("conexion.php");
		$this->conexion=new Conexion();
	}
	function insertar($nombre_grupo, $fkcarrera){
		$consulta="INSERT INTO grupo (idgrupo, nombre_grupo, fkcarrera) 
		VALUES (NULL, '{$nombre_grupo}','{$fkcarrera}')";
		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;
	}
	function mostrar(){
		$consulta="SELECT * FROM grupo g INNER JOIN carrera c ON c.idcarrera=g.fkcarrera 
		WHERE g.estatus=1"; 
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function buscarPorId($idgrupo){
		$consulta="SELECT * FROM grupo g INNER JOIN carrera c ON g.fkcarrera=c.idcarrera
			WHERE idgrupo='{$idgrupo}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;	
	}
	function actualizar($nombre_grupo, $fkcarrera, $idgrupo){
		$consulta="UPDATE grupo SET nombre_grupo='{$nombre_grupo}', fkcarrera='{$fkcarrera}'
			WHERE idgrupo='{$idgrupo}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function baja($idgrupo){
		$consulta="UPDATE grupo SET estatus=0 WHERE idgrupo='{$idgrupo}'";
		$resultad=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function eliminar($idgrupo){
		$consulta="DELETE FROM grupo WHERE idgrupo='{$idgrupo}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
}
 ?>