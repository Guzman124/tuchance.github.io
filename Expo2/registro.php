<?php
include("coneccion.php");
if (isset($_POST['registro'])){
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1) {
	    $usuario= trim($_POST['usuario']);
		$contraseña= trim($_POST['contraseña']);
	    $consulta = "INSERT INTO usuarios(usuario,contraseña) VALUES ('$usuario','$contraseña')";
	    $resultado = mysqli_query($coneccion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>



           <?php
             	header("location:menu.php");
             } else {
	    	?> 
			<br>
	    	<h3 class="bad">este nombre de usuario ya esta en uso</h3>
           <?php
	    }
    }    
}
?>