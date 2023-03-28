/*
 ARCHIVO QUE CONTIENE DOS CLASES A MODO DE EJEMPLO DE JAVASCRIPT:
 
*/

//Declaración de la clase persona.

class Persona{
	
	
	//Atributos privados  (No se puede acceder directamente desde el exterior de la clase.)
	//declación: #nombredeatributo
	#nombre //Declarar el atributo nombre de tipo privado.
	#apellido
	
	//Métodos, para esta clase son de tipo públicos, para que sea privado se antepone # antes del nombre del método.
	
	/*Es el primer método que se ejecuta cuando se instancia un objeto de la clase
	  puede tener o no tener parámetros.
	*/
	/*constructor(){
		this.#nombre=" ";
		this.#apellido=" ";
		
	}*/
	
	constructor(nom,ape){
		this.#nombre=nom;
		this.#apellido=ape;
	}
	
	//Getters y Setters - para poder Acceder a los atributos desde el exterior-
	getNombre(){
		
		
		return this.#nombre;
		
	}
	
	getApellido(){
		
		return this.#apellido;
		
	}
	
	setNombre(nom){
		this.#nombre=nom;
	}
	
	setApellido(ape){
		this.#apellido=ape;
	}
	
	//Métodos propios de la clase.
	mostrar(){
		
		document.write("Nombre = " +  this.#nombre + " <br> " + "Apellido =" + this.#apellido);
		
	}
	
	
}

class Empleado extends Persona{ //La clase Empleado hereda de la clase Persona.
	
	//Atributo privado.
	#sueldo
	
	//super es un objeto referencia a la clase padre, en este caso Persona.
	
	
	//Métodos públicos.
	constructor(nom,ape,sue){
		super(nom,ape); //invoca al contructor de persona.
		this.#sueldo=sue;
	}
	
	//Getters y Setters.
	getSueldo(){
		return this.#sueldo;
		
	}
	
	setSueldo(sue){
		this.#sueldo = sue;
	}
	
	//Métodos propios
	mostrar(){
		super.mostrar();//Mostar de la clase Persona
		document.write( "<br> Sueldo :$" +this.#sueldo );
		
	}
	
	
}
