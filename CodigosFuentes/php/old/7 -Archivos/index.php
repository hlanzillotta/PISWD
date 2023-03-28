<!DOCTYPE html>
<html>
    <head>
         <title>Ejemplo de contador de visitas</title>
         <meta charset='utf-8'>
    </head>
    <body>
         <center><strong><u>EJEMPLO DE ARCHIVOS CON PHP</u></strong></center>
		 <div align="center" style="margin-top:20%" >
             <?php
                 include('/php/Funciones.php');   //VINCULAR EL ARCHIVO DE Funciones.php
				 $Ruta = './Archivos/Contador.txt';   
                 $UltimaCantidad = LeerArchivo($Ruta); //OBTENER EL VALOR ANTERIOR DE VISITAS.
                 $UltimaCantidad ++; //INCREMENTAR EN UNO LA CANTIDAD DE VISITAS.
                 EscribirArchivo($Ruta,$UltimaCantidad); //ACTUALIZAR EL ARCHIVO CON LA NUEVA CANTIDAD DE VISITAS.
                 echo "Cantidad de visitas a la página : ".$UltimaCantidad; //MOSTRAR LA CANTIDAD DE VISITAS ACTUAL.
			?>
         </div>
    </body>
    
    

</html>

