<?php

/*
	FUNCIONES EN PHP: PUEDEN SER DE TRES TIPOS
	
	1)CONVENCIONALES, DEFINIDAS POR EL PROGRAMADOR.
	
	2)ANÓNIMAS: NO TIENEN NOMBRE, SE IDENTIFICAN POR UNA VARIABLE.
	
	3)VARIÁDICAS: SE LAS PUEDE LLAMAR O INVOCAR CON MÚLTIPLES PARÁMETROS.


*/


#FUNCIÓN CONVENCIONAL.
function calcularPromedio ($suma,$cont){
	
	$prome = 0;
	
	if($cont > 0)
	   $prome = $suma/$cont;
    else
	   echo 'No se puede dividir por cero';
	
	return $prome;
   
}

#FUNCIÓN ANÓNIMA.
$funcanonima = create_function('$suma,$cont','return $suma/$cont;');

#FUNCIÓN VARÍADICA.
function funcionVariadica(){
	
	//func_get_args(): RETORNA TODOS LOS VALORES PASADOS COMO PARÁMETROS.
	$arrayArgs = func_get_args();
	$cantArgs = count($arrayArgs);#CANTIDAD DE ARGUMENTOS
	
	echo "Llamado a la función variádica con $cantArgs argumento/s:<br>";
	
	/*foreach ($arrayArgs as $parametros )
	          echo "$parametros<br>"; */
	
	var_dump($arrayArgs);
	
	if($cantArgs >0 ){
		//MAX, MIN PARA VALORES ENTEROS.
		echo "El valor numérico máximo es ".max($arrayArgs)."<br>";
		echo "El valor numérico mínimo es ".min($arrayArgs)."<br>";
	}
	
}
?>
