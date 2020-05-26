<?php 
	include ("conexion.php");

	if(isset($_POST["enviar"])){
        $correo = utf8_decode($_POST['iCorreo']);
        $nombre = utf8_decode($_POST['iNombre']);
		$contraseña = utf8_decode($_POST['iContraseña']);
		$consulta = 'INSERT INTO `usuarios2`.`usuario` (`correo`, `nombre`, `contraseña`) VALUES ("'. $correo .'", "'.$nombre.'","'.$contraseña.'")';

		$retry_value = mysqli_query($conexion, $consulta);
		if(!$retry_value){
			die('Error: '.myqli_error($conexion));
		}else{
			header('Location:../index.html');
		}
	}

	

?>