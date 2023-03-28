<?php 
	
/*****************************FUNCIONES GENERALES DE PHP*********************************/
	error_reporting(0);//ELIMINAR WARNINGS DEL SERVIDOR.
	header('Cache-Control: no cache'); //NO ALMACENAR EN CACHÉ LOS DATOS DE LA PÁGINA.
	header('Content-Type: text/html; charset=ISO-8859-1'); //PONER ACENTOS EN LA PÁGINA
	mysql_query('SET NAMES "utf8"');//REALIZAR BÚSQUEDA CON ACENTOS.
	//session_start(); //INICIO DE SESIÓN.
	session_cache_limiter('private_no_expire'); //CACHÉ SIN EXPIRACIÓN.
	//include('FuncionesParaBDD.php');//VINCULAR ARCHIVOS DE PHP.
	
	
/*****************************PROGRAMA PRINCIPAL*****************************************/
		
	//CONECTARSE AL SERVIDOR.
	$NombreConexion=mysqli_connect('localhost','root') or die("error al conectar ".mysql_error());
	
	//SELECCIONAR BASE DE DATOS.
	$tabla=mysqli_select_db($NombreConexion,'Prueba') or die("error al seleccionar base de datos ".mysql_error());
	
	//EJECUTAR CONSULTA.
	$resultado=mysqli_query($NombreConexion,"select * from persona") or die("error al ejercutar query ".mysql_error());
	
	
		//RECORRER RESULTADOS DE LA CONSULTA.
		echo "<table align='center' border='ridge'>";
		echo "<th>NRO DE DCOUMENTO</th>";
		echo "<th>NOMBRE Y APELLIDO</th>";
		echo "<th>EDAD</th>";
		while ($row = mysqli_fetch_array($resultado))
	          {   
				  echo "<tr align='center'>";
				  echo "<td>".$row[0]."</td>";
				  echo "<td>".$row[1]."</td>";
				  echo "<td>".$row[2]."</td>";
		          echo "</tr>"; 
		     }
	    echo"</table>";
	  
	
	
	//LIBERAR CONEXIÓN A BDD.
	mysqli_free_result($resultado);
	
	//LIBERAR CONEXIÓN A SERVIDOR.
	mysqli_close($NombreConexion);
	
	
	
	

  

?>