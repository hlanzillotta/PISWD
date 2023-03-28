<?php

  require_once ('ClaseAlumno.php');  

  echo '<center><h1><u>EJEMPLO DE POO CON PHP CON PHP</u></h1></center><br><br><br>';
  
  
  #INSTANCIAR UN OBJETO DE LA CLASE ALUMNO CON PARÁMETROS. 
  $objeto = new Alumno("Juan","Perez");
  
  #ENVIAR UN MENSAJE -> INVOCAR A UN MÉTODO DE LA CLASE ALUMNO.
  $objeto->Mostrar();
  
  #MODIFICAR EL NOMBRE.
  $objeto->set_Nombre('Diego');
  
  #MODIFICAR EL APELLIDO.
  $objeto->set_Apellido('Amondia');
  
  #MOSTRAR EL NOMBRE.
  echo "<br><br>Nombre : ".$objeto->get_Nombre()."<br><br>";
  
  #MOSTRAR EL APELLIDO.
  echo "<br><br>Nombre : ".$objeto->get_Apellido()."<br><br>";
   
  //$objeto->Limpiar();//Error, no se puede acceder desde el exterior a un método private.

?>