<?php
	
	error_reporting(0);//ELIMINAR WARNINGS DEL SERVIDOR.
	header('Cache-Control: no cache'); //NO ALMACENAR EN CACHÉ LOS DATOS DE LA PÁGINA.
	header('Content-Type: text/html; charset=ISO-8859-1'); //PONER ACENTOS EN LA PÁGINA
	//mysql_query('SET NAMES "UTF-8"');//REALIZAR BÚSQUEDA CON ACENTOS.
	session_start(); //INICIO DE SESIÓN.
	session_cache_limiter('private_no_expire'); //CACHÉ SIN EXPIRACIÓN.
		
	#VARIABLES DE SESIÓN.	
	$_SESSION['dnis'];
	$_SESSION['ayns'];
	$_SESSION['edads'];

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Mostrar(){
	//BLOQUE DE CÓDIGO QUE SE EJECUTA CUANDO SE HACE include DE ESTE ARCHIVO.
	if($_POST['dni'] )
	  {
		try{
			$NombreConexion=Conectar();
			$tabla=SeleccionarBaseDeDatos($NombreConexion);
			$dni=$_POST['dni'];
			$sql="select * from persona where NroDocumento=".$dni;
			//EJECUTAR CONSULTA.
			$resultado=mysqli_query($NombreConexion,$sql) or die("ERROR al ejecutar query ".mysql_error());
			if($row = mysqli_fetch_array($resultado)){
				$ayn= $row[1];
				$edad= $row[2]; 
				}
		    }   
		catch(Exception $e){
			echo "ERROR";
			}
		
		Desconectar($resultado,$NombreConexion);
		}
	}	 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function InsertarRegistro(){
	
		try{
			$NombreConexion=Conectar();
			$tabla=SeleccionarBaseDeDatos($NombreConexion);
			$dni=$_POST['dni'];
			$ayn=$_POST['ayn'];
			$edad=$_POST['edad'];
			$ayn= "'".$ayn."'";	
			$sql="insert into persona values (".$dni.",".$ayn.",".$edad.")";
			//echo $sql;
			$resultado=mysqli_query($NombreConexion,$sql) ;//or die("ERROR al ejecutar query ".mysql_error()); 
            if($resultado)
				echo "Registro Insertado correctamente.";
			else
               	echo "Registro NO Insertado correctamente.";	
		  }
		
		catch(Exception $e){
			echo "ERROR AL EJERCUTAR INSERT.";
		   }
		
				
		Desconectar($resultado,$NombreConexion);
		
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function ActualizarRegistro(){
	//IMPLEMENTAR.		
}		
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function SeleccionarRegistro(){
	   
		$NombreConexion=Conectar();
		
		$tabla=SeleccionarBaseDeDatos($NombreConexion);
		
		$sql="select * from persona where NroDocumento=".$_POST['dni'];
		
		$resultado=mysqli_query($NombreConexion,$sql);
		
		if($row = mysqli_fetch_array($resultado))
		  {
			$ayn = $row[1];
			$edad = $row[1];  
		  }
		
	Desconectar($resultado,$NombreConexion);	
		
}
	
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function BorrarRegistro(){
	 
	
	if($_POST['BotonDelete']){ 
	try{
		$NombreConexion=Conectar();
		$tabla=SeleccionarBaseDeDatos($NombreConexion);
		$sql="delete from persona where NrodeDocumento=".$_SESSION['dnis'];
		$resultado=mysqli_query($NombreConexion,$sql) or die("ERROR al ejecutar query delete".mysql_error()); 
		
		if($resultado)
			{echo "Registro Eliminado correctamente.";
			 LimpiarVarSession();
			}
		else
          	echo "Registro NO Eliminado correctamente.";   		  
		}
		
		catch(Exception $e){
			echo "ERROR AL EJERCUTAR DELETE.";
		   }
		
		Desconectar($resultado,$NombreConexion); 
		header("Location: " . $_SERVER['HTTP_REFERER']); 
		
}		}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Conectar(){
		
		$link;
		
		//CONECTARSE AL SERVIDOR.
		$link=mysqli_connect('localhost','root') or die("Error al conectar con Servidor ".mysql_error());
	    
		return $link;
 }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function SeleccionarBaseDeDatos($NombreConexion){
		
		//SELECCIONAR BASE DE DATOS.
		$tabla=mysqli_select_db($NombreConexion,'prueba') or die("Error al seleccionar Base de Datos ".mysql_error());
		
		return $tabla;	
 
 
		
	}
	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Desconectar($resultado,$NombreConexion){
		
		
		//if($resultado)		
			//LIBERAR CONEXIÓN A BDD.
			//mysqli_free_result($resultado);
		
		
		if($NombreConexion)
			//LIBERAR CONEXIÓN A SERVIDOR.
			mysqli_close($NombreConexion);
			
		
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function LimpiarVarSession(){
	
	$_SESSION['dnis']='';
	$_SESSION['ayns']='';
	$_SESSION['edads']='';
	
}
?>