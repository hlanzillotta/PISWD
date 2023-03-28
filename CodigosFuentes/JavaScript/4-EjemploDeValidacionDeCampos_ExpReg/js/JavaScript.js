
//SE EJECUTA CUANDO SE CARGA LA PÁGINA.
window.onload = function () {
	document.formularioContacto.nombre.focus();
	
	/*EVENTO QUE SE ACTIVA CUANDO EL FORMULARIO ES ENVIADO.
	ANTES DE QUE SE ENVÍE EL FORMULARIO SE LLAMA A LA FUNCIÓN validarFormulario.*/
	
	document.formularioContacto.addEventListener('submit', validarFormulario );
}

//////////////////////////////////////////////////////////////////////////////////////////// 
function validarFormulario(evObject) {

evObject.preventDefault();//DETIENE LA ACCIÓN POR DEFECTO CUANDO SUCEDE EL EVENTO.

var todoCorrecto = true;
var formulario = document.formularioContacto;

//LLAMADA A OTRAS FUNCIONES.		
todoCorrecto *= ValidarTexto(formulario.nombre);  
todoCorrecto *= ValidarTexto(formulario.apellidos);
todoCorrecto *= ValidarNumero(formulario.edad);
todoCorrecto *= ValidarMail(formulario.email);				


if (todoCorrecto ==true) {
	formulario.submit();
   }
}

////////////////////////////////////////////////////////////////////////////////////////////
function EscribirTitulo (Str_Titulo){
	
	//document.write("<hr><center><p style='background-color:green;'>1</p></center><hr>");
	alert();
	//document.write("ddd");
}

////////////////////////////////////////////////////////////////////////////////////////////
function ValidarTexto(ObjElemento){

    var resultado=true;
	
	/*
	  EXPRESIONES REGULARES : SON CADENAS DE TEXTOS QUE FORMAN UN PATRÓN.
	  
	  /^[a-zA-Z\s]+$/ -> Caracteres alfabéticos.
	  
	  /^[1-9]/ -> Caracteres numéricos.
	
	*/
	
	if(  /^[a-zA-Z\s]+$/.test(ObjElemento.value)==false || /^[1-9]/.test(ObjElemento.value)==true)
	  {
	   alert('Campo ' + ObjElemento.name + ' incorrecto. ');
       resultado=false;
	  }
	  
    return resultado;	  
}


////////////////////////////////////////////////////////////////////////////////////////////
function ValidarNumero(ObjElemento){

    var resultado=true;
	
	
	if(isNaN(ObjElemento.value)==true || /^[1-9]/.test(ObjElemento.value)==false)
	  {
	   alert('Campo ' + ObjElemento.name + ' incorrecto. ');
       resultado=false;
	  }
    return resultado;	  
}


////////////////////////////////////////////////////////////////////////////////////////////
function ValidarMail(ObjElemento){
	
	 var resultado=true;
	 	 
	 if( /\S+@\S+\.\S+/.test(ObjElemento.value)==false)
	    {
		 alert('Campo ' + ObjElemento.name + ' incorrecto. ');
         resultado=false;	
		} 
    return resultado;
}
