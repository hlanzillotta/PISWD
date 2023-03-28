<?php
	
	/*
	
	ESTE PEQUEÑO PROGRAMA ES UN EJEMPLO DE COMBINACIÓN DEL LENGUAJE PHP CON
	EL LENGUAJE HTML A TRAVÉS DE LA INSTRUCCIÓN echo.
	
	*/
	
	#INICIALIZACIÓN DE VARIABLES EN LA DECLARACIÓN.
	
	#LOS TIPOS DE DATOS DE LAS VARIABLES SON :integer,float o double, string, boolean.
	
	
	//INICIO DEL PROGRAMA.
	$a=1; //integer
	
	$b=3.50;//float o double 
	
	$c="Hola mundo";//string
	
	$d=false;//boolean
	
	$a='@';
	
	//CONSTANTES
	const MAX_VALOR = 500;
	//define('MAX_VALOR','500');
		
	echo '<center><h1><u>Primer Ejemplo en PHP</u></h1></center>';
    	
	
	#El carcacter . es concaternación de cadena de caracteres.
	print "La variable a vale : $a <br>".
	      "La variable b vale : $b <br>".
		  "La variable c vale : $c <br>".
		  "La variable d vale : $d <br>".#PARA EXHIBIR UN VALOR BOOLEANO CONVERTIR A STRING.
		  "La constante MAX_VALOR = ".MAX_VALOR;
		  
   //var_dump($d);
	
	/*echo "La variable a vale : ".$a."<br>". 
	     "La variable b vale : ".$b."<br>". 
	     "La variable c vale : ".$c."<br>".
		 "La variable d vale : ".var_dump($c)."<br>";*/
   
    #NOTAS:
	//var_dump() : Proporciona información sobre el tamaño y tipo de datos de la variable.
    //testear var_dump($c) ¿Cuál es el resultado?.
 ?>
 