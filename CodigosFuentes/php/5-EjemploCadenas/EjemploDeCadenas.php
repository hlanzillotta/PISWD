 <?php
    
	/*EJEMPLO DE MANIPULACIÓN DE CADENA DE CARACTERES (STRINGS) CON FUNCIONES DE 
	  PHP.
	*/
	
	#HEAD
	header('Content-Type: text/html; charset=utf-8;title:Ejemplo de cadenas PHP');
    
	#BODY
	  echo"<center><b><u>  MANIPULACIÓN DE CADENAS DE CARACTERES EN PHP </center></b></u>";
	  
	  //strlen()
      $str_descripcion='Retorna la cantidad de caracteres de una cadena.';
      escribirTitulo('strlen()',$str_descripcion);
	    
	  echo "La cadena de texto 'Hernan' tiene ".strlen("Hernan")." caracteres.";
      echo "<hr>";
 
      //explode()
      $pieza  = "una-dos-tres-cuatro-cinco";
      $piezas = explode("-", $pieza);
 
      $str_descripcion= "Divide un cadena en varias cadenas.";
      escribirTitulo('explode()',$str_descripcion);
 
      foreach($piezas as $individuales)
      {
         echo $individuales."<br>";
      }
      echo "<hr>";
 
      //sprintf()
      $num = 5;
      $objeto = 'árbol';
      $formato = 'Hay %d monos en el %s';
 
      $str_descripcion= "Retorna una cadena producido según el string de formateo";
      escribirTitulo('sprintf()',$str_descripcion);
	  
	  echo sprintf($formato, $num, $objeto);
      echo "<hr>";
 
      //substr()
      $cadenaSubstr = "Hola mundo. Esta es una cadena a evaluar.";
      
	  $str_descripcion="Retorna parte de una cadena.";
      escribirTitulo('substr()',$str_descripcion);
	  
	  $cadenaSubstr = substr($cadenaSubstr, 4, 10);
      echo $cadenaSubstr."<br>";
      echo "<hr>";
 
      //chop()
      $str_descripcion= "Quita los espacios en blanco (u otros caracteres) del final de un string (ídem rtrim).";
	  escribirTitulo('chop()',$str_descripcion);
	  
      $cadenaChop = "Hola mundo     ";
      echo "<pre>";
      echo chop($cadenaChop); #strlen(chop($cadenaChop));
      echo "</pre >";
      echo "<hr>";
 
      // strpos()
      $str_descripcion= "Retorna la posición de la primera ocurrencia de un substring en un string.";
	  escribirTitulo('strpos()',$str_descripcion);
	  
      $cadenaStrpos = 'Hola mundo. Esta es una cadena a evaluar.';
      $encontrar   = 'mundo';
      $pos = strpos($cadenaStrpos, $encontrar);
 
      if ($pos === false)
      {
         echo "Ops! la cadena <i>$encontrar</i> no fue encontrada en la cadena <strong>$cadenaStrpos</strong>.";
      }
      else
      {
         echo "La cadena <i>$encontrar</i> fue encontrada en la cadena <strong>$cadenaStrpos</strong> y existe en la posición <strong>$pos</strong>.";
      }
      echo "<hr>";
 
      //str_replace()
      $str_descripcion="Reemplaza todas las apariciones del string buscado con el string de reemplazo.";
	  escribirTitulo('str_replace()',$str_descripcion);
 
      $vocales = array("a", "e", "i", "o", "A", "E", "I", "O");
      $cadenSTRreplace = "Hola mundo. Esta es una cadena a evaluar.";
      $reemplazador = array("4", "3", "1", "0", "4", "3", "1", "0");
 
      $cadenSTRreplace = str_replace($vocales , $reemplazador, $cadenSTRreplace);
 
      echo $cadenSTRreplace."<br>";
      echo "<hr>";
 
      //ucfirst()
      $str_descripcion="Retorna una cadena con el primer caracter str en máyusculas, si el caracter es alfabético.";
	  escribirTitulo("ucfirst()",$str_descripcion);
 
      $cadenaUCfirst = 'hola mundo';
      $cadenaUCfirst = ucfirst($cadenaUCfirst);
 
      echo $cadenaUCfirst."<br>";
      echo "<hr>";
 
      //ucwords()
	  $str_descripcion='Convierte a mayúsculas el primer caracter de cada palabra de una cadena';
      escribirTitulo('ucwords()',$str_descripcion);
	   
      $cadenaUcwords = 'hola mundo';
      $cadenaUcwords = ucwords($cadenaUcwords);
 
      echo $cadenaUcwords."<br>";
      echo "<hr>";
 
      //strtolower()
      $str_descripcion="Convierte un string a minúsculas.";
	  escribirTitulo('strtolower()',$str_descripcion);
 
      $cadenaStrtolower = 'HOLA MUNDO';
      $cadenaStrtolower = strtolower($cadenaStrtolower);
 
      echo $cadenaStrtolower."<br>";
      echo "<hr>";
 
      //strtoupper()
      $str_descripcion="Convierte un string a mayúsculas.";
	  escribirTitulo('strtoupper()',$str_descripcion);
 
      $cadenaStrtoupper = 'hola mundo';
      $cadenaStrtoupper = strtoupper($cadenaStrtoupper);
 
      echo $cadenaStrtoupper."<br>";
      echo "<hr>";
 
      //trim()
	  $str_descripcion="Elimina espacio en blanco (u otro tipo de caracteres) del inicio y el final de la cadena.";
      escribirTitulo('trim()',$str_descripcion);
	  
      $cadenaTrim = "    Hola mundo    ";
      echo "<pre>";
      echo trim($cadenaTrim);
      echo "</pre >";
      echo "<hr>";
 
      //md5()
      $str_descripcion="Calcula el 'hash' md5 de un string.";
	  escribirTitulo('md5()',$str_descripcion);
      $cadenaMD5 = "Escuela de Educación secundaria técnica Nº6 - Chacabuco - "; 
      $cadenaMD5 = md5($cadenaMD5);
      echo $cadenaMD5."<br>";
      echo "<hr>";
 
      //nl2br()
      $str_descripcion="Inserta saltos de línea HTML antes de todas las nuevas líneas de un string.";
	  escribirTitulo ('nl2br()',$str_descripcion);
	  
      $cadenaNl2br = "Hola\nmundo\nHTML";
      echo "<pre>";
 
      $cadenaNl2br = nl2br($cadenaNl2br);
      echo $cadenaNl2br;
 
      echo "</pre >";
      echo "<hr>";
      
	  ##########################################################################
	  function escribirTitulo($str_funcion, $str_descripcion){
		  
		  echo "<br><strong> $str_funcion: $str_descripcion </strong> <br><br>";
		  
	  }
	  
 ?>
 
  