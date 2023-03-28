/*
 ARCHIVO QUE CONTIENE EJEMPLOS DE PROTOTIPOS EN JAVASCRIPT
*/

//Crear un objeto llamado prototipo que posee los atributos/propiedades var1,var2,var3,var4.
var prototipo={
	
	var1:5,
	var2:10.3,
	var3:true,
	var4:"Cadena",
	
	
}

//Función para ser implementada como prototipo.
function funcPrototipo (param1, param2 ){
	this.param1= param1;
	this.param2=param2;

}
//Añadir más métodos o propiedades a la función.
funcPrototipo.prototype.Metodo1 = function(valor){

	this.param1 = valor;
}
funcPrototipo.prototype.Metodo2 = function(valor){

	this.param2 = valor;
}

funcPrototipo.prototype.MetodoN = function(){
 
  document.write("<br>Parámetro 1 = " + this.param1 + "<br> Parámtro 2 = " + this.param2);
 
}