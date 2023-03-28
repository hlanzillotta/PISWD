<html> 
	<head>
		<meta charset="utf-8"></meta>
    	<title>Ejemplo de métodos POST en PHP 5</title>
	</head> 
 
	<body>
	<center>
		<h1><u>EJEMPLO DE MÉTODO POST</u></h1>
	</center>
	<hr>
	<?php
 
		if($_POST)
		{
			echo "El formulario se ejecutó con éxito.<br><br>";
 
			echo "<pre>";
			print_r($_POST);
			echo "</pre >";
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
    			<select name="anoNacimiento">
    				<option value="null">Selecciona un año</option>
					<?php
    				$anos = 1900;
					while ($anos < 2000)
						{
					      echo"<option value=".$anos.">".$anos."</option>";
						  $anos++;
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