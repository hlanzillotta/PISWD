<?php



  //Creación de una clase en php.
  //$this : PUNTERO A LA CLASE BASE.

  class Alumno{

               #Declaración de atributos privados.
               private $nombre;
               private $apellido;
			   
			   
			   
			                
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
			  
			  
              
			  #Métodos Privados.
			  private function Limpiar()
			  {
				 $this->nombre = "";
                 $this->apellido = ""; 
			  }
			  
			  
			  
			  #Métodos públicos.
              public function Mostrar()
              {
                echo $this->nombre."-".$this->apellido; 
                
              } 

             			  
            
          }

?>