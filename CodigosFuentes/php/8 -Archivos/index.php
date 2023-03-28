<!DOCTYPE html>
<html>
    <head>
         <title>PHP-Ejemplo de Archivos</title>
         <meta charset='utf-8'>
    </head>
    <body>
         <center><strong><u>EJEMPLO DE ARCHIVOS CON PHP</u></strong></center>
		 <div align="center"  >
             <?php
                 
				 require_once('/php/Funciones.php');   //VINCULAR EL ARCHIVO DE Funciones.php
				 $Raiz = './Archivos/';
				 
				 $Ruta = $Raiz.'Lectura.txt';
				 echo "<br><br><br><br><u>Información del archivo $Ruta</u><br><br>";
				 //MOSTRAR EL ARCHIVO POR LÍNEAS.
				 LeerArchivoLineaPorLinea($Ruta,20);
				 
				 echo "<br><br><br><br><u>Uso de las funciones fseek y ftell</u><br><br>";
				 
				 UsodeFseekFtell($Ruta);
				 
				 //INFORMAR EL CONTADOR DE VISITAS.
				 $Ruta = $Raiz.'Contador.txt';   
                 $UltimaCantidad = LeerArchivo($Ruta); //OBTENER EL VALOR ANTERIOR DE VISITAS.
                 $UltimaCantidad ++; //INCREMENTAR EN UNO LA CANTIDAD DE VISITAS.
                 EscribirArchivo($Ruta,$UltimaCantidad); //ACTUALIZAR EL ARCHIVO CON LA NUEVA CANTIDAD DE VISITAS.
                 
				 echo "<div style='margin-top:5%;'><hr><b>Cantidad de visitas a la página : ".$UltimaCantidad."</b></div>"; //MOSTRAR LA CANTIDAD DE VISITAS ACTUAL.
			?>
         </div>
    </body>
    
    

</html>

