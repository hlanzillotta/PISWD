<?php
 
 
	session_start();

 

	  
		try{
			$NombreConexion=Conectar1();
			$tabla=SeleccionarBaseDeDatos1($NombreConexion);
			$_SESSION['dnis']=@$_POST['dni'];
			$sql="select * from persona where NrodeDocumento = ".$_SESSION['dnis'];
			//echo $sql;
			//EJECUTAR CONSULTA.
			$resultado=mysqli_query($NombreConexion,$sql) or die("Error");
			if($row = mysqli_fetch_array($resultado)){
				$_SESSION['ayns']= $row[1];
				$_SESSION['edads']= $row[2];
				//echo "dddd";				
				}
			else
			  {
				  $_SESSION['dnis']='';
				  $_SESSION['ayns']='';
				  $_SESSION['edads']='';
			  }
			 
		    }   
		catch(Exception $e){
			echo "ERROR";
			}
		
		Desconectar1($resultado,$NombreConexion);
		header("location:".$_SERVER['HTTP_REFERER']);
		
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Conectar1(){
		
		$link;
		
		//CONECTARSE AL SERVIDOR.
		$link=mysqli_connect('localhost','root') or die("Error al conectar con Servidor ".mysql_error());
	    
		return $link;
 }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function SeleccionarBaseDeDatos1($NombreConexion){
		
		//SELECCIONAR BASE DE DATOS.
		$tabla=mysqli_select_db($NombreConexion,'prueba') or die("Error al seleccionar Base de Datos ".mysql_error());
		
		return $tabla;	
 
 
		
	}
	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Desconectar1($resultado,$NombreConexion){
		
		
		//if($resultado)		
			//LIBERAR CONEXIÓN A BDD.
			//mysqli_free_result($resultado);
		
		
		if($NombreConexion)
			//LIBERAR CONEXIÓN A SERVIDOR.
			mysqli_close($NombreConexion);
			
		//echo "Desconectar() OK.";
}
		
?>