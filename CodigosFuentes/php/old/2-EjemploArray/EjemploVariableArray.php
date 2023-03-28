<html> 
	<head>
		<meta charset="utf-8"></meta>
		<title>Ejemplo  de Arrays en PHP</title> 
	</head> 
 
	<body>
	
	<center><h1><u>Ejemplo  de Arrays en PHP </u></h1></center>
	<br><br>
 
<?php
 
	//DECALRAR ARRAY.
 
	$Vector = array();
	
	//DECLARAR E INICIALIZAR VECTOR.
	//$Vector = array(10,7.5,"a","texto",false);
    
	//CARGAR VARLORES AL ARRAY. 
    $Vector[0] = 10;
	$Vector[1] = 7.5;
	$Vector[2] = "a";
	$Vector[3] = "TEXTO";
	$Vector[4] = false;//Sólo se puede mostrar con var_dump();
	
	//CARGAR ARRAY ASOCIATIVO, CLAVE => VALOR.
	$Vector2 = array( 0 => 'Altas',
					  1 => 'Bajas' ,
					  2 => 'Modificaciones',
					  3 => 'Salir'
                    );
	
     
	//VISUALIZAR LA INFORMACIÓN DEL VECTOR.
 	echo "<pre>"; // <- HTML que especifica texto sin formato
	echo "<center><b><u>RESULTADO DE LA FUNCIÓN print_r</u></b></center>"."<br>";  
	
	print_r($Vector);
    
	echo "<center><b><u>RESULTADO DE LA FUNCIÓN var_dump()</u></b></center>"."<br>";  
	
	var_dump($Vector);
	
	//var_dump($Vector2);
	
	/*
	 foreach ($Vector2 as $key => $valor) {
			  print_r($valor);
             }
	*/
	
	
	echo"</center>";
	echo "</pre >";
?>
 