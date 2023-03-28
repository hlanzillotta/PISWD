<?php

  /////////////////////////////////////////////////////////////////////////////////
  function LeerArchivo($RutaNombre)
  {
	  
	//Abrimos el archivo para solamente leerlo (r de read) 
	$abre = fopen($RutaNombre, "r"); 
	
	//Leemos el contenido del archivo y lo almacenamos en la variable $total.
	$total = fread($abre, filesize($RutaNombre)); 
	
	//Cerramos la conexión al archivo 
	fclose($abre);
		
	return $total;	
	  
  }
  /////////////////////////////////////////////////////////////////////////////////
  function EscribirArchivo($RutaNombre,$Informacion)
  {
	

    //echo '<br>Nombre = '.$RutaNombre.'<br>';
	
	//Abrimos el archivo para solamente escribirlo (w de write). 
	$abre = fopen($RutaNombre, "w"); 
	
	//Grabamos la información.
	$grabar = fwrite($abre, $Informacion);  
	
	//Cerramos la conexión al archivo 
	fclose($abre); 
	
  }

?>