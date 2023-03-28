<?php
 
/* Multi-Función */
function regexCheck($variable,$tipoAValidar)
{
   $valor=false; 
   
   //Selector de la regex (expresión regular)
   switch ($tipoAValidar)
   {
      case "email":
            $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
            break;
 
      case "ipAddress":
            $regex = "/^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/";
		    break;
 
      case "userName":
            $regex = "/^[a-z\d_]{4,15}$/i";
	        break; 
	
	  case "url":
	        $regex = "/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$/";  
            break;
      
	  case "pass":
	       $regex = "(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$";
           break;

      case "telephonenumber":
           $regex= "^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$"; 	  
           break;
    }
 
 
   if(preg_match($regex,$variable))//Realiza una comparación con una expresión regular.
      $valor= TRUE;
   
   
   return $valor;
   
 
}
 

//VALIDACIÓN DE LOS DATOS
 
if(@$_POST['emailForm'])
{
   if(regexCheck($_POST['emailForm'],"email")){
      $resultadoEmail = "El email tiene el formato correcto.";
   }
   else
   {
      $resultadoEmail = "El email NO tiene el formato correcto.";
   }
}
 
if(@$_POST['IPForm'])
{
   if(regexCheck($_POST['IPForm'],"ipAddress")){
      $resultadoIP = "La dirección IP tiene el formato correcto.";
   }
   else
   {
      $resultadoIP = "La dirección IP NO tiene el formato correcto.";
   }
}
 
if(@$_POST['UserNameForm'])
{
   if(regexCheck($_POST['UserNameForm'],"userName")){
      $resultadoUN = "El nombre de usuario tiene el formato correcto.";
   }
   else
   {
      $resultadoUN = "El nombre de usuario tiene el formato correcto.";
   }
}
 

if(@$_POST['url'])
{
   if(regexCheck($_POST['url'],"url")){
      $resultadoUN = "el url tiene el formato correcto.";
   }
   else
   {
      $resultadoUN = "el url no tiene el formato correcto.";
   }
}
 
 
?>