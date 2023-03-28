//CONSTANTES GLOBALES.
const PI = 3.14159;

//DECLARACIÓN DE VARIABLES GLOBALES.
var Volumen=0.0;
var CualquierValor=0;


//ARRAYS
//var Vector=new Array(); //DINÁMICO.
//ESTÁTICO DE 10 POSICIONES.
//var Vector1 = new Array(10);




//*************************************	FUNCIONES **********************************

////////////////////////////////////////////////////////////////////////////////
function EscribirTitulo(Titulo){

	document.write("<center><p class='Titulo'>" + Titulo + "</p></center><hr>");
}

////////////////////////////////////////////////////////////////////////////////
function EscribirPieDePagina(Pie,texto){  //'PISWD - Ejemplo 1 - JavaScript'

	var objeto = document.getElementById(Pie);
	
	objeto.innerHTML="<hr><address><p>" + texto + "</p></address>";
}

////////////////////////////////////////////////////////////////////////////////
function AbrirVentana(Nombre){
                    //  ./paginas/Pagina.htm 
	/*window.open(URL,name,specs,replace)
	  NOTA = LOS PARÁMETROS SON TODOS OPCIONALES.
	  Ejemplo : 
		var myWindow = window.open("", "", "width=200,height=100");
	*/
	 
	
	 window.open(Nombre,"_blank"); //ABRE LA NUEVA VENTANA EN LA MISMA PÁGINA POR 
                           //EL VALOR "_self"
}
////////////////////////////////////////////////////////////////////////////////
function CerrarVentana(){
   
	//NO FUNCIONA SI PRIMERO SE INVOCA A LA FUNCIÓN window.open();
	window.close();
              	
}

////////////////////////////////////////////////////////////////////////////////
function MostrarVariables(){
	
	var vector2 = [1,2,'a',"texto",1.23];
	
	cualquierValor="Algo";
	
	alert('PI = ' + PI +'\n'+ 'Volumen = '+ Volumen + '\n' + 'CualquierValor = ' + cualquierValor);
	
	
	
	//alert('CualquierValor = ' + cualquierValor);
	
	//MOSTRAR VECTOR TRADICIONAL.
	for (i=0;i<5;i++)
   	     alert(Vector2[i]); 
	 
	//RECORRIDO IMPLÍCITO.
    for (var valor of vector2)
  		 /*EN CADA ITERACIÓN ALMACENA EN LA VARIABLE valor, EL CONTENIDO
	       DEL VECTOR EN LA POSICIÓN ACTUAL. 
		 */
	     alert(valor);
	
	
	/* BUSCAR EN EL VECTOR UN VALOR Y RETORNAR EL ÍNDICE DONDE SE ENCONTRÓ.*/ 
	// alert (vector2.indexOf(1.23));
	   
	// ORDENAR EL VECTOR.
	//vector2.sort();  
	
	/*vector3 = [10,20,30];
	alert(Math.min.apply(null,vector3)); //VALOR MÍNIMO DEL VECTOR.
   	alert(Math.max.apply(null,vector3)); //VALOR MÁXIMO DEL VECTOR.
	*/
}

///////////////////////////////////////////////////////////////////////
function CalulaRadio(elemento,Radio){
	
	var Area,RadioLocal;//DECLARACIÓN DE VARIABLES LOCALES.
	
	RadioLocal = document.getElementById(Radio).value;//ACCESO AL VALOR DEL ELEMENTO POR ID.
	    
	Area = PI * Math.pow(RadioLocal,2);//RadioLocal ^ 2
	
	document.getElementById(elemento).innerHTML=Area;//ESCRIBIR UN VALOR AL ELEMENTO.
	
	//ACCESO A LAS PROPIEDADES DEL ELEMENTO.
	document.getElementById(elemento).style.backgroundColor="yellow";
	document.getElementById(elemento).style.border="ridge";
	
}

//////////////////////////////////////////////////////////////////////////////////
function Division(dividendo,divisor,elemento){
	
	var division,d1,d2;
	/*
		MANEJO DE EXCEPCIONES.
		
		EXCEPCIÓN -> UNA EJECUCIÓN NO DESEADA EN LA EJECUCIÓN DE UN PROGRAMA QUE MODIFICA SU COMPORTAMIENTO.
                     LAS EXCEPCIONES SE PUEDEN CAPTURAR O ATRAPAR. (TRATAMIENTO).
       
        try{
			 //Código sometido a excepción.
			 throw excepción;
			
		   }
        catch( identicador )//Captura la excepción.
		  {
			  //Código de tratamiento de la excepción.
		  }	
        
        finally{ //Es opcional.
			   
			   //Bloque que se ejecuta siempre.
			
		}		
	
	
	*/
	try{
	    d1=document.getElementById(dividendo).value;
        d2=document.getElementById(divisor).value;
		
	    if(d2==0){
		   throw "NO SE PUEDE DIVIDIR POR CERO.";
          }
		  
		division=d1/d2;
	    document.getElementById(elemento).innerHTML=division;
		
		//ACCESO A LAS PROPIEDADES DEL ELEMENTO.
		document.getElementById(elemento).style.backgroundColor="green";
		document.getElementById(elemento).style.border="dotted";
	   }
	catch(err)
	{
		alert("Error: " + err);
	}
	
	/*finally{//EJECUTA SIEMPRE.
		
		    alert("Finally");
	}*/
	
	
}

////////////////////////////////////////////////////////////////////////////////////////////
function ValidarNumero(Elemento){

    var resultado=true;
	var ObjElemento=document.getElementById(Elemento);
	
	if(isNaN(ObjElemento.value)==true || /^[1-9]/.test(ObjElemento.value)==false)
	  {
	   alert('Campo ' + ObjElemento.name + ' incorrecto. ');
       resultado=false; 
	   
	  }
   	
	return resultado;
}

////////////////////////////////////////////////////////////////////////////////////////////
function LimpiarCampo(Elemento){
	
	//BLANQUEAR/BORRAR/RESETEAR/VACIAR TODAS LAS CAJAS DE TEXTO.
	document.getElementById(Elemento).innerHTML="";
}