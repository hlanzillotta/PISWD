<?php
    session_start();
?>

<html>
	<head>
		
	</head>
	<body>
		<center>
			<fieldset>
				<legend>Datos</legend>
				<form name ="formulario" method="post" action="buscar.php"  >
					DNI  
					<input name ="dni" method="post" type="text" value='<?php echo $_SESSION['dnis'] ; ?>'  onblur="form.submit();"  ><br>
				</form>
				<form name ="formulario" method="post" action="Update.php"  >
					Nombre Y Apellido 
					<input name= "ayn" id="ayn" type="text" value='<?php echo $_SESSION['ayns']; ?>' >
					<br>
					Edad <input name ="edad" type="text" value='<?php echo $_SESSION['edads']; ?>' >
					<br>
					<input name="BotonUpdate" type="submit" value="Actualizar"    />
				</form>
			</fieldset>
		</center>
	</body>
</html>