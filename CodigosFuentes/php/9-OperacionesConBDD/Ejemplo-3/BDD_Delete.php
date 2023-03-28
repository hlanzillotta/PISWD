<?php
 require_once('FuncionesGeneralesParaBDD.php');
?>

<html>
	<center>
		<form method="post" action="Buscar.php" >
			DNI <input name ="dni" type="text"   ><br>
			<input  type="submit" value="Buscar" />	
		</form>
		<?php echo "DNI = ". $_SESSION['dnis']."<br>APELLIDO Y NOMBRE = ".$_SESSION['ayns']."<BR>EDAD = ".$_SESSION['edads']; ?>
		<form method="post" >
			<input name='BotonDelete'  type='submit' value='Baja' />   
		</form>
		<?php 
		     if($_POST['BotonDelete']) 
		        BorrarRegistro();  
		
		?>
	</center>
</html>