<?php

require_once "conexion.php";

class ModeloPlantilla{

	static public function mdlEstiloPlantilla($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

        // recupera una única fila ( fetchAll() recupera todas)
		return $stmt -> fetch();

		$stmt -> close();

	}

}