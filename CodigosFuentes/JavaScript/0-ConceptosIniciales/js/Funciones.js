/*FUNCIONES DEFINIDAS POR EL PROGRAMADOR O FUNCIONES CONVECIONALES*/
///////////////////////////////////////////////////////////////////////////////////
function hacerAlgo(){
	alert("Genero un mensaje");
}
///////////////////////////////////////////////////////////////////////////////////
function escribirEnConsola (mensaje){
	console.log(mensaje);
	
} 
///////////////////////////////////////////////////////////////////////////////////
//FUNCIONES VARIÁDICAS
function funcionVariadica(){
	
	//arguments -> Objeto de JavaScript
	
	for (var i=0;i<arguments.length;i++)
		 escribirEnConsola("Parámetro " + i + ",valor = " + arguments[i]);
	
}
////////////////////////////////////////////////////////////////////////////////////
//FUNCIONES ANÓNIMAS.
var anonima = function (parametro){
	
	//alert("Función anónima" + parametro);
	return 2*parametro;
}