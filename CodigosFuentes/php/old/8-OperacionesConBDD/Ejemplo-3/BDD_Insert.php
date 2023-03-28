<?php
    include('FuncionesGeneralesParaBDD.php');
?>

<html>
	<body>
		<center>
			<form method="post" >
				DNI <input name ='dni' type='text' ><br>	
				NOMBRE Y APELLIDO <input name ='ayn' type='text' ><br>
				EDAD <input name ='edad' type='text' ><br>
				<input name='BotonInsert' type='submit' value='Alta' /> 
			</form>
			<?php 
				if($_POST['BotonInsert'])
				  {
					  InsertarRegistro();
				  }	 
				
			
			?>
		</center>
	</body>
</html>