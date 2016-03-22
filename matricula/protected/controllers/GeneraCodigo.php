<?php
class GeneraController
{
	public function creaCodigo($tabla, $letras, $caracter) 
	{	
		$conexion = Yii::app()->db;	
		$tabla = strtolower($tabla);
		$consulta = "SELECT CONCAT('".strtoupper(substr($tabla,0,2))."', LPAD((Max(substring(cod".$tabla.",5,10))+1),".$letras.",'".$caracter."')) AS 'codigo' FROM ".$tabla."";

		//echo $consulta;
		//exit();
		
		$resultado = $conexion->createCommand($consulta);

		//$filacodigo = $resultado->query();

		$filacodigo = $resultado->queryColumn();

		//print_r($filacodigo);
		//exit();

		$codigo=$filacodigo[0];
		if($codigo==null){
			$codigo=strtoupper(substr($tabla,0,2)).str_pad("1",$letras,$caracter,STR_PAD_LEFT);
			}
		return $codigo;
	}

}
?>