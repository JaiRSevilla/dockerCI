<?php 
class Alumno{
	function __construct(){
		require_once("conexion.php");
		$this->conexion=new Conexion();

	}
	function insertar($nombre_alumno, $a_paterno, $a_materno, $fecha_nac, $curp, 
					$matricula, $fkgrupo, $correo, $telefono, $nombre_archivo){
		$consulta="INSERT INTO alumno (idalumno, nombre_alumno, a_paterno, a_materno, fecha_nac, curp, matricula, fkgrupo, correo, telefono, foto, estatus) 
		VALUES (NULL, '{$nombre_alumno}', '{$a_paterno}', '{$a_materno}', '{$fecha_nac}', '{$curp}',
		 	'{$matricula}', '{$fkgrupo}', '{$correo}', '{$telefono}', '{$nombre_archivo}', 1)";
		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;
	}
	function mostrar(){
		$consulta="SELECT * FROM alumno a INNER JOIN grupo g ON a.fkgrupo=g.idgrupo
		INNER JOIN carrera c ON g.fkcarrera=c.idcarrera WHERE g.estatus=1 
		ORDER BY nombre_alumno ASC"; 
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function buscarPorId($idalumno){
		$consulta="SELECT * FROM alumno a INNER JOIN grupo g ON a.fkgrupo=g.idgrupo
			WHERE idalumno='{$idalumno}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;	
	}
	function actualizar($nombre_alumno, $a_paterno, $a_materno, $fecha_nac, $curp, $matricula, 
						$fkgrupo, $correo, $telefono, $idalumno){
		$consulta="UPDATE alumno SET nombre_alumno='{$nombre_alumno}', a_paterno='{$a_paterno}',
			a_materno='{$a_materno}', fecha_nac='{$fecha_nac}', curp='{$curp}', matricula='{$matricula}',
			fkgrupo='{$fkgrupo}', correo='{$correo}', telefono='{$telefono}'  
			WHERE idalumno='{$idalumno}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function baja($idalumno){
		$consulta="UPDATE alumno SET estatus=0 WHERE idalumno='{$idalumno}'";
		$resultad=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function eliminar($idalumno){
		$consulta="DELETE FROM alumno WHERE idalumno='{$idalumno}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
}

 ?>