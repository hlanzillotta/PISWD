<?php 
	
/*****************************FUNCIONES GENERALES DE PHP*********************************/
	error_reporting(0);//ELIMINAR WARNINGS DEL SERVIDOR.
	header('Cache-Control: no cache'); //NO ALMACENAR EN CACHÉ LOS DATOS DE LA PÁGINA.
	header('Content-Type: text/html; charset=ISO-8859-1;title=PHP-Base de datos'); //PONER ACENTOS EN LA PÁGINA
	mysql_query('SET NAMES "utf8"');//REALIZAR BÚSQUEDA CON ACENTOS.
	//session_start(); //INICIO DE SESIÓN.
	session_cache_limiter('private_no_expire'); //CACHÉ SIN EXPIRACIÓN.
	//include('FuncionesParaBDD.php');//VINCULAR ARCHIVOS DE PHP.
	
	
/*****************************PROGRAMA PRINCIPAL*****************************************/
		
	
	echo '<center><h1><u>EJEMPLO DE BASE DE DATOS CON PHP CON PHP</u></h1></center><br><br><br>';
	
	//CONECTARSE AL SERVIDOR.
	$NombreConexion=mysqli_connect('localhost','root') or die("error al conectar ".mysql_error());
	
	//SELECCIONAR BASE DE DATOS.
	$tabla=mysqli_select_db($NombreConexion,'Prueba') or die("error al seleccionar base de datos ".mysql_error());
	$query="select * from persona order by edad DESC";
	
	//EJECUTAR CONSULTA.
	$resultado=mysqli_query($NombreConexion,$query) or die("error al ejercutar query ".mysql_error());
	
	
		//RECORRER RESULTADOS DE LA CONSULTA.
		echo "<table align='center' border='ridge'>";
		echo "<th>NRO DE DCOUMENTO</th>";
		echo "<th>NOMBRE Y APELLIDO</th>";
		echo "<th>EDAD</th>";
		while ($fila = mysqli_fetch_array($resultado)){
	              //POR CADA FILA.
				  echo "<tr align='center'>";
				  echo "<td>".$fila[0]."</td>";//PRIMER CAMPO.
				  echo "<td>".$fila[1]."</td>";//SEGUNDO CAMPO.
				  echo "<td>".$fila[2]."</td>";//TERCER CAMPO.
		          echo "</tr>"; 
		     }
	    echo"</table>";
	  
	
	
	/*LIBERAR LA MEMORIA DE LOS RESULTADOS ARROJADOS POR mysqli_query().*/
	mysqli_free_result($resultado);
	
	//LIBERAR CONEXIÓN A SERVIDOR.
	mysqli_close($NombreConexion);
	
	  

?>