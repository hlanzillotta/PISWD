<?php
 include('Funciones.php');//VINCULAR UN ARCHIVO PHP
?>

<html> 
   <head>
      <title>Ejemplo de expresiones regulares en PHP 5</title>
	  <meta charset="utf-8"></meta>
   </head> 
   <body>
 
   <h3>Validemos e-mail:</h3>
   <form action="" method="post">
      Tu e-mail: 
         <input type="text" name="emailForm"> <br> <br>
         <input type="submit" value="Comprobar">
   </form>
   <strong><?php echo @$resultadoEmail; ?></strong>
 
   <h3>Dirección IP:</h3>
   <form action="" method="post">
      IP: 
         <input type="text" name="IPForm"> <br> <br>
         <input type="submit" value="Comprobar">
   </form>
   <strong><?php echo @$resultadoIP; ?></strong>
 
   <h3>Nombre de usuario:</h3>
   <form action="" method="post">
      Uusario: 
         <input type="text" name="UserNameForm"> <br> <br>
         <input type="submit" value="Comprobar">
   </form>
   <strong><?php echo @$resultadoUN; ?></strong>
   
   <h3>URL:</h3>
   <form action="" method="post">
      Ingresar URL : 
         <input type="text" name="url"> <br> <br>
         <input type="submit" value="Comprobar">
   </form>
   <strong><?php echo @$resultadoUN; ?></strong>
   
   <!-- DESARROLLAR EL CÓDIGO PARA VALIDAR NRO DE TELÉFONO, CONTRASEÑA -->
   
   
   </body> 
</html>