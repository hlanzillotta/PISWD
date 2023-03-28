<?php

 /*
  require_once: VINCULA UN ARCHIVO CON EL SCRIPT ACTUAL, SI YA 
                ESTÁ VINCULADO NO LO VINCULA, SI NO EXITE, DETIENE
                LA EJECUCIÓN.				
                   
 */
 require_once('Funciones.php');
?>

<html> 
   <head>
      <title>Ejemplo de expresiones regulares en PHP 5</title>
	  <meta charset="utf-8"></meta>
   </head> 
   
   <body>
	<center><h1><u><b>Ejemplo de expresiones regulares en PHP </b></u></h1></center>
   <h3>Validemos e-mail:</h3>
   <form action="" method="post">
      Tu e-mail: 
         <input type="text" name="emailForm"> <br> <br>
         <input type="submit" value="Comprobar">
   </form>
   <strong><?php echo @$resultadoEmail; // @-> Var. Global. ?></strong>
 
   <h3>Dirección IP:</h3>
   <form action="" method="post">
      IP: 
         <input type="text" name="IPForm"> <br> <br>
         <input type="submit" value="Comprobar">
   </form>
   <strong><?php echo @$resultadoIP; // @-> Var. Global.?></strong>
 
   <h3>Nombre de usuario:</h3>
   <form action="" method="post">
      Uusario: 
         <input type="text" name="UserNameForm"> <br> <br>
         <input type="submit" value="Comprobar">
   </form>
   <strong><?php echo @$resultadoUN; // @-> Var. Global.?></strong>
   
   <h3>URL:</h3>
   <form action="" method="post">
      Ingresar URL : 
         <input type="text" name="url"> <br> <br>
         <input type="submit" value="Comprobar">
   </form>
   <strong><?php echo @$resultadoUN; // @-> Var. Global. ?></strong>
   
   <!-- DESARROLLAR EL CÓDIGO PARA VALIDAR NRO DE TELÉFONO, CONTRASEÑA -->
   
   
   </body> 
</html>