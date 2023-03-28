<?php
  //<html>
	//<head>
		#error_reporting(0);//ELIMINAR WARNINGS DEL SERVIDOR.
		header('Content-Type: text/html; charset=utf-8'); //COLOCAR ACENTOS EN LA PÁGINA.
		/*include('Funciones.php');//VINCULAR EL ARCHIVO DE FUNCIONES.
		  SI Funciones.php NO EXISTE GENERA UN WARNING. 
		  include_once(('Funciones.php');//SI YA ESTÁ INCLUÍDO, NO LO VUELVE A INCLUIR.
		  
		*/
		require_once('Funciones.php');//VINCULAR EL ARCHIVO DE FUNCIONES.
		/*require: ÍDEM include PERO SI EL ARCHIVO NO EXISTE DETIENE LA EJECUCIÓN.
		  require_once: ÍDEM require PERO SÍ EL ARCHIVO YA ESTÁ INCLUÍDO NO LO VUELVE
                        A INCLUIR. 		  
		*/
		
		
    //</head>
	
	//<body>
		echo "<center><h1><u>Ejemplo  de Arrays en PHP </u></h1></center>";

		echo "<u>Llamado a función calcularPromedio(5,8)</u>"."<br>";

		echo calcularPromedio(5,8)."<br><br>";
	  
		echo "<u>Llamado a función anónima (6,4)</u>"."<br>";
			
		echo $funcanonima(6,4)."<br><br>";
		
		echo "<u>Llamado a función Variádica</u>"."<br><br>";

		echo funcionVariadica()."<br><br>";
		echo funcionVariadica(25)."<br><br>";
		echo funcionVariadica("Alumnos 2020")."<br><br>";
		echo funcionVariadica(6,4)."<br><br>";
		echo funcionVariadica(true,"Hola",10.5,1,'a');	
	//</body>
  //</html>
?>