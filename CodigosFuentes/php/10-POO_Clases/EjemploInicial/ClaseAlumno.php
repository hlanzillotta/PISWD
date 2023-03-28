<?php

  /* PROGRAMACIÓN ORIENTADA A OBJETOS CON PHP.
     
	 MODIFICADORES
	 -------------
	 
	 private: SÓLO ES ACCESIBLE POR LA PROPIA CLASE.
     protected: ACCESIBLE POR LA PROPIA CLASE Y LAS QUE HEREDAN DE ELLA
	 public: ACCESIBLE DESDE EL INTERIOR Y EL EXTERIOR DE LA CLASE.
  
     $this : REFERENCIA A LA CLASE BASE.
  */

  class Alumno {

               #Declaración de atributos privados.
               private $nombre;
               private $apellido;
			   


               #Métodos Privados.
			   private function Limpiar()
			   {
				 $this->nombre = "";
                 $this->apellido = ""; 
			   }   			   
			      
               #Constructor sin parámetros -> SE EJECUTA CUANDO SE HACE UNA INSTANCIA DE LA CLASE.
               /*public function __construct()
               {
                 $this->nombre="hernan";
                 $this->apellido="lanzillotta";
               }
			   
			   
			   if (method_exists($this,$f='__construct'.$i)) { 
                   call_user_func_array(array($this,$f),$a); 
                   } 
			   
			   function __construct1($a1) 
				{ 
					echo('__construct with 1 param called: '.$a1.PHP_EOL); 
				} 
				
				function __construct2($a1,$a2) 
				{ 
					echo('__construct with 2 params called: '.$a1.','.$a2.PHP_EOL); 
				} 
				
				function __construct3($a1,$a2,$a3) 
				{ 
					echo('__construct with 3 params called: '.$a1.','.$a2.','.$a3.PHP_EOL); 
				}
			   
			   
			   */
			  #SÓLO SE PUEDE COLOCAR UN CONSTRUCTOR.
			  #Constructor sin parámetros -> SE EJECUTA CUANDO SE HACE UNA INSTANCIA DE LA CLASE. 
             /* public function __construct()
               {
                 $this->nombre = "";
                 $this->apellido = "";
                 
               } */

              #Constructor parámetrizado -> SE EJECUTA CUANDO SE HACE UNA INSTANCIA DE LA CLASE. 
              public function __construct($a,$b)
               {
                 $this->nombre = $a;
                 $this->apellido = $b;
                 
               }
              
			  #Destructor
			  function __destruct() 
			  {
				
				echo "<br>Destruyendo Clase Alumno <br>" ;
			    $this->Limpiar();
			  }
			  
			    
			  
			  #Métodos públicos.
              
			  //GETTERS - ACCESORES DE LECTURA.
			  public function get_Nombre(){
				  return $this->nombre;
			  }
			  public function get_Apellido(){
				  return $this->apellido;
			  }
			  //SETTERS - ACCESORES DE ESCRITURA.
			  public function set_Nombre($nuevoNombre){
				  $this->nombre=$nuevoNombre;
			  }
			  public function set_Apellido($nuevoApellido){
				  $this->apellido=$nuevoApellido;
			  }
			  
			  //PROPIOS.
			  public function Mostrar()
              {
                echo "Nombre : ".$this->nombre."<br>"."Apellido : ".$this->apellido."<br>"; 
                
              } 

             			  
            
          }

?>