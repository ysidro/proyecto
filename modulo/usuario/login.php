<?php 
	
	require_once '../../fn/motor.php';

	$x = coneccion();

	if (count($_POST) == 2 ) {
		
		foreach ($_POST as $l => $v) {
			header("Location: login.php");
			exit;
		}

	}

	$email = $_POST['email'];
	$clave = md5($_POST['clave']);

	$sql = "SELECT id,nombre,email,estado FROM usuario 
	WHERE email = '" . $email . "' ";

	
 ?>