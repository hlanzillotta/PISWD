<?php
	
	#HEADER
	error_reporting(E_ERROR | E_WARNING | E_PARSE);//ELIMINAR WARNINGS DEL SERVIDOR.
	header('Cache-Control: no cache'); //NO ALMACENAR EN CACHÉ LOS DATOS DE LA PÁGINA.
	header('Content-Type: text/html; charset=utf-8 '); //PONER ACENTOS EN LA PÁGINA
	session_cache_limiter('private_no_expire'); //CACHÉ SIN EXPIRACIÓN.
	
	#BODY
	echo"<center><b><u> EJEMPLO DE VARIABLES RESERVADAS EN PHP </center></b></u>";
	echo "<pre>";
	
	//isset():Determina si un campo está definido.
	
	################################################################################
	Nuevo();
	Titulo('Variable $_SERVER');
	print_r($_SERVER);
	
	################################################################################
	Nuevo();
	Titulo('Variable $_COOKIE');

	#Crear variables de tipo cookie.
	setcookie("Variable_1", "1");
	setcookie("Variable_2", "2");
	setcookie("Variable_3", "3");
	if(isset($_COOKIE))
		print_r($_COOKIE);
	
	
	
	################################################################################
	Nuevo();
	Titulo('Variable $_FILE');
	echo "<form method='post' enctype='multipart/form-data'>
			Archivo: <input type='file' name='archivo'> <br> <br>
			<input type='submit' value='Enviar'>
          </form>";
	if(isset($_FILES))
	   print_r($_FILES);
   
	################################################################################
	Nuevo();
	Titulo('Variable $_REQUEST');
	if(isset($_REQUEST))
		print_r($_REQUEST);//testear var_dump($_REQUEST);
	
	
	################################################################################
	Nuevo();
	Titulo('Variable $_SESSION');
	
	session_start(); #Iniciar una sesión.
	
 	if(isset($_SESSION)){
		//Crear variables de session
		$_SESSION['Usuario'] = "Administrador";
		$_SESSION['Cotraseña'] = "123456";
		print_r($_SESSION);
		session_unset();//Libera todas las variables de session.
	    }
	
	session_destroy(); #Finalizar la sesión.
	################################################################################
	echo "</pre>";
	

	
/////////////////////////////////////////////////////////////////////////////////////
function Nuevo(){
	echo"<hr><br>";	
}
/////////////////////////////////////////////////////////////////////////////////////
function Titulo($Str_Titulo){
	echo "<center><u>".$Str_Titulo."</u></center><br>";
}	
	
?>