function TestTryCatchFinallyThrow(txt,parrafo) {
				
	var mes, x;
				
	try {	//BLOQUE DE CÓDIGO PROTEGIDO/ A PRUEBA DE ERRORES.
			mes = document.getElementById(parrafo);
			mes.innerHTML = "";
			x=document.getElementById(txt).value;
			
			if(x == "")  
				throw "vacío";
			if(isNaN(x)) 
				throw "No es un número";
			x = Number(x);
			if(x > 10)   
				throw "Supera el límite superior (10)";
			if(x < 5)    
				throw "Supera el límite inferior (5)";
			
			alert(" !!! PERFECTO !!!");
		}
	
	catch(err) //BLOQUE MANEJADOR DE ERRORES.
	   {
			mes.innerHTML = "ERROR :  " + err;
	   }
	finally  //BLOQUE DE CÓDIGO QUE SE EJECUTA SIEMPRE.
	   {
		    document.getElementById(parrafo).value = "";
	   }
}