<?php

	error_reporting(0);//ELIMINAR WARNINGS DEL SERVIDOR.
	header('Cache-Control: no cache'); //NO ALMACENAR EN CACHÉ LOS DATOS DE LA PÁGINA.
	header('Content-Type: text/html; charset=ISO-8859-1'); //PONER ACENTOS EN LA PÁGINA
	include('Funciones.php');#VINCULAR EL ARCHIVO DE FUNCIONES.

	echo "<center><h1><u>Ejemplo  de Arrays en PHP </u></h1></center>";

	echo "Llamado a función calcularPromerio"."<br>";

	calcularPromedio(5,8);
  
    echo "Llamado a función anónima"."<br>";

	funcanonima(6,4);
	
	echo "Llamado a función Variádica"."<br>";

	//funcionVariadica();
	//funcionVariadica(25);
	//funcionVariadica(6,4);
    //funcionVariadica(true,"Hola",10.5,1,'a');	
	
	?>