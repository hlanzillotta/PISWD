﻿<?php 
	
/*****************************FUNCIONES GENERALES DE PHP*********************************/
	error_reporting(0);//ELIMINAR WARNINGS DEL SERVIDOR.
	header('Cache-Control: no cache'); //NO ALMACENAR EN CACHÉ LOS DATOS DE LA PÁGINA.
	header('Content-Type: text/html; charset=ISO-8859-1'); //PONER ACENTOS EN LA PÁGINA
	//mysql_query('SET NAMES "utf8"');//REALIZAR BÚSQUEDA CON ACENTOS.
	session_start(); //INICIO DE SESIÓN.
	session_cache_limiter('private_no_expire'); //CACHÉ SIN EXPIRACIÓN.
	//include('FuncionesParaBDD.php');//VINCULAR ARCHIVOS DE PHP.
	
	
/*****************************PROGRAMA PRINCIPAL*****************************************/
		
	//CONECTARSE AL SERVIDOR.
	$NombreConexion=mysqli_connect('localhost','root') or die("error ".mysql_error());
	
	//SELECCIONAR BASE DE DATOS.
	$tabla=mysqli_select_db($NombreConexion,'Prueba') or die("error ".mysql_error());
	
	//EJECUTAR CONSULTA.
	$resultado=mysqli_query($NombreConexion,"select * from persona") or die("error ".mysql_error());
	
	
		//RECORRER RESULTADOS DE LA CONSULTA.
		echo "<table align='center' border='ridge'>";
		echo "<th>NRO DE DCOUMENTO</th>";
		echo "<th>NOMBRE Y APELLIDO</th>";
		echo "<th>EDAD</th>";
		$i=0;
		while ($row = mysqli_fetch_array($resultado))
	          {   
				  echo "<tr align='center'>";
				  echo "<td>".$row[0]."</td>";
				  echo "<td>".$row[1]."</td>";
				  echo "<td>".$row[2]."</td>";
		          $i ++;
				  echo "</tr>"; 
		     }
	    echo"</table>";
	    echo "<br><center>TOTAL DE REGISTROS : ".$i."</center>";
	
	
	//LIBERAR CONEXIÓN A BDD.
	mysqli_free_result($resultado);
	
	//LIBERAR CONEXIÓN AL SERVIDOR.
	mysqli_close($NombreConexion);
	
	
	
	

  

?>