<?php
class Carrera {

	function __construct(){
		require_once("conexion.php");
		$this->conexion= new Conexion();

	}

	function insertar($nombre_carrera, $abreviatura, $nombre_archivo){
		$consulta="INSERT INTO carrera (idcarrera, nombre_carrera, abreviatura, estatus, imagen) 
			VALUES (NULL, '{$nombre_carrera}', '{$abreviatura}', 1,  '{$nombre_archivo}')";
		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;
	}
	function mostrar(){
		$consulta="SELECT * FROM carrera WHERE estatus=1 ORDER BY nombre_carrera ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function buscarPorId($idcarrera){
		$consulta="SELECT * FROM carrera WHERE idcarrera='{$idcarrera}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function actualizar($nombre_carrera, $abreviatura, $idcarrera){
		$consulta="UPDATE carrera SET nombre_carrera='{$nombre_carrera}', abreviatura='{$abreviatura}' WHERE
			idcarrera='{$idcarrera}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function baja($idcarrera){
		$consulta="UPDATE carrera SET estatus=0 WHERE idcarrerao='{$idcarrera}'";
		$resultad=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function eliminar($idcarrera){
		$consulta="DELETE FROM carrera WHERE idcarrera='{$idcarrera}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
}

?>