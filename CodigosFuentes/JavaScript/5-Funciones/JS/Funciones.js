/*
 ARCHIVO QUE CONTIENE FUNCIONES A MODO DE EJEMPLO DE JAVASCRIPT:
 FUNCIONES CONVECIONALES, ANÓNIMAS Y VARIÁDICAS.
 
*/

///////////////////////////////////////////FUNCIONES CONVENCIONALES///////////////////////////////////////////

/*
  NOMBRE DE FUNCIÓN = calcularPromedio.
  DESCRIPCIÓN = Calcula y retorna el promedio.
  PARÁMETROS:
	 suma : Sumatoria.
	 contador : Cantidad.
  VALOR DE RETORNO : El promedio entre Suma y Contador. 	 
  
*/
function calcularPromedio (suma, contador){
	
	prome = 0;
	
	if(contador>0)
	    prome = suma/contador;
    
    return prome;	
	
}

/*
  NOMBRE DE FUNCIÓN = mayorValor.
  DESCRIPCIÓN = Calcula y retorna el mayor entre dos valores.
  PARÁMETROS:
	 valor1 : Primer valor a comparar.
	 valor2 : Primer valor a comparar.
  VALOR DE RETORNO : El mayor entre ambos valores. 	 
  
*/
function mayorValor (valor1, valor2){
	
	var mayor = 0;//Asumir que son iguales.
	
	if(valor1 > valor2)
	    mayor=valor1;
	else 
		if(valor2 > valor1)
			mayor = valor2;
         			
	return mayor;	
	
}

/*
  NOMBRE DE FUNCIÓN = escribirTextoEnDocumento.
  DESCRIPCIÓN = Escribe texto en la página.
  PARÁMETROS:
	 cadenaTexto : texto a escribir en la página.
  VALOR DE RETORNO : Ninguno. 	 
  
*/
function escribirTextoEnDocumento (cadenaTexto){
	
	document.write(cadenaTexto + "<br><br>");
	
}





///////////////////////////////////////////FUNCIONES VARIÁDICAS//////////////////////////////////////
/*
  NOMBRE DE FUNCIÓN = funcVariadica.
  DESCRIPCIÓN = Muestra la cantidad de parámetros recibidos por la función y su valor.
  PARÁMETROS: Ninguno.
  VALOR DE RETORNO : Ninguno. 	 
  
*/
function funcVariadica(){
	
	escribirTextoEnDocumento ("La función recibe : " + arguments.length + " parámetros: ");
	//Recorrer todos los parámetros que recibe la función.
	for (var i=0;i<arguments.length;i++){
	          
		escribirTextoEnDocumento ("argumento: " + arguments[i]);
	}
	
}
///////////////////////////////////////////FUNCIONES ANÓNIMAS//////////////////////////////////////
/*
  NOMBRE DE FUNCIÓN = funcAnonima.
  DESCRIPCIÓN = Muestra un mensaje.
  PARÁMETROS: Ninguno.
  VALOR DE RETORNO : Ninguno. 	 
  
*/
var funcAnonima = function(){
	
	escribirTextoEnDocumento ("Función anónima");
	
}

