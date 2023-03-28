<html> 
	<head>
		<meta charset="utf-8"></meta>
    	<title>Ejemplo de métodos POST en PHP </title>
	</head> 
 
	<body>
	<center>
		<h1><u>EJEMPLO DE MÉTODO POST</u></h1>
	</center>
	<hr>
	
	<?php
 
		if($_POST)
		{
			$validar=true;
			
			//VALIDAR.
			if (empty($_POST['nombre'])){
				echo "<script>alert('Nombre vacío.');</script>"; 
			    $validar=false;
			   } 
			
			 else if (empty($_POST['ciudad'])){
				      echo "<script>alert('Ciudad vacía.');</script>"; 
			          $validar=false;
			          }
			
			 else if (empty($_POST['anioNacimiento']) || $_POST['anioNacimiento']== 'null'){
				      echo "<script>alert('Año nacimiento null.');</script>"; 
			          $validar=false;
			        }
			//Mensaje.
			if($validar == true){
			   echo "El formulario se envió con éxito.<br><br>";
               echo "<pre>";
			   print_r($_POST);
			   echo "</pre >";
			}
			else{
				 echo "El formulario tiene errores.<br><br>";
			  }
		}
 
	?>
	<hr>
	<form action="" method="post">
 
    	<p>
    		Dime cuál es tu nombre: <input type="text" name="nombre">
    	</p>
 
    	<p>
    		Dime cómo se llama tu ciudad: <input type="text" name="ciudad">
    	</p>
 
    	<p>
    		¿En qué año naciste?: 
    			<select name="anioNacimiento">
    				<option value="null">Selecciona un año</option>
					<?php
						$anio = 1900;
						while ($anio < 2000)
							{
							  echo"<option value=".$anos.">".$anio."</option>";
							  $anio++;
							 }
					?>
    			</select>
    	</p>
 
    	<p>
    		<input type="submit" value="Validar">
    	</p>
 
    </form>
 
	</body> 
	</html>