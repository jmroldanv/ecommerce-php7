/*=============================================
PLANTILLA
=============================================*/

$.ajax({

	url:"ajax/plantilla.ajax.php",
	success:function(respuesta){

		//debug
		//console.log(respuesta);

		//console.log(JSON.parse(respuesta).colorFondo);

		//JSON.parse() parsea una cadena json extrayendo los campos
		var colorFondo = JSON.parse(respuesta).colorFondo;
		var colorTexto = JSON.parse(respuesta).colorTexto;
		var barraSuperior = JSON.parse(respuesta).barraSuperior;
		var textoSuperior = JSON.parse(respuesta).textoSuperior;
		
		$(".backColor, .backColor a").css({"background": colorFondo,
											"color": colorTexto})

		$(".barraSuperior, .barraSuperior a").css({"background": barraSuperior, 
			                                       "color": textoSuperior})

	}


})