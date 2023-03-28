<?php
  
  /*EJEMPLO DE CÓDIGO PARA EL MANEJO DE EXCEPCIONES 
    
	Exception: ES UNA CLASE PROPIA DE PHP PARA MANIPULAR LAS EXCEPCIONES.
    
    LA SENTENCIA throw new Exception INSTANCIA UNA REFERENCIA DE LA CLASE EXCEPTION.    
	
  */
  
  
  #HEADER.
  //error_reporting(0);// Desactivar toda las notificaciónes del PHP.
  error_reporting(E_ERROR | E_WARNING | E_PARSE); // Notificar solamente errores de ejecución
  header('Content-Type: text/html; charset=utf-8 '); //COLOCAR ACENTOS EN LA PÁGINA.
  
  #BODY.
  echo '<center><h1><u>Ejemplo del manejo de Excepciones en PHP</u></h1></center>';
  
  try{
	  $valor = 5;
	  
	  $divisor = 0;
	  
	  if($divisor == 0)
		   throw new Exception("Error - División por cero.");//Arrojar excepción.
	  
	  $resultado = $valor / $divisor;
	  
	  print $resultado;
	  
  }
  
  catch(Exception $e){
	   //$e: REFERENCIA U OBJETO DE CLASE Exception.
	   
	   echo "<br>"."Excepción capturada: ". $e->getMessage()."<br>";
	   /*
	   Exception :: getMessage - Obtiene el mensaje de excepción.
       Exception :: getPrevious - Devuelve la excepción anterior.
	   Exception :: getCode - Obtiene el código de excepción.
	   Exception :: getFile - Obtiene el archivo en el que se creó la excepción.
	   Exception :: getLine - Obtiene la línea en la que se creó la excepción.
	   Exception :: getTrace - Obtiene el seguimiento de la pila.
	   Exception :: getTraceAsString - Obtiene el seguimiento de la pila como una cadena.
	   */
  }
  
  finally{
	  
	  echo "<br>"."<br>"."Finally: Bloque que siempre se ejecuta, es opcional.";
  }
  


?>