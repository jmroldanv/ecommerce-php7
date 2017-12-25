<?php

require_once "../controladores/plantilla.controlador.php";
require_once "../modelos/plantilla.modelo.php";

class AjaxPlantilla{

	public function ajaxEstiloPlantilla(){

		$respuesta = ControladorPlantilla::ctrEstiloPlantilla();

		//debug
		//var_dump($respuesta);

		//convierte un array php en un string tipo json
		echo json_encode($respuesta);

	}


}

$objeto = new AjaxPlantilla();
$objeto -> ajaxEstiloPlantilla();
